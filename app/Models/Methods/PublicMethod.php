<?php

namespace App\Models\Methods;

use App\Models\Article\Article;
use App\Models\Basic\Lang;
use App\Models\Basic\Translate;
use App\Models\Project\Project;
use App\Models\Regulation\Regulation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PublicMethod extends Model
{
    use HasFactory;


    public static function uploadImage($file, $path, $old = null, $sub_path = null)
    {
        if ($old != null and strpos($old, url('/')) !== false) {
            $old = str_replace(url('/').'/','',$old);
        }
        if ($old != null && file_exists(public_path() . '/' . $old)) {
            unlink(public_path() . '/' . $old);
        }

        $image = time() . '_' . $file->getClientOriginalName();
        $image = str_replace(' ', '', $image);
        if (is_null($sub_path)) {
            $file->storeAs("public/$path/", $image);
//            $file->move(public_path("storage/$path"), $image);
            return "storage/$path/" . $image;
        } else {
            $file->storeAs("public/$path/$sub_path/", $image);
//            $file->move(public_path("storage/$path/$sub_path"), $image);
            return "storage/$path/$sub_path/" . $image;
        }

    }

    public static function translate($table_name, $field_name, $language, $field_id = null)
    {
        $default_lang = Lang::where('default', 1)->first()->url;

        if ($field_id == null) {
            $translate = Translate::where('table_name', $table_name)->where('field_name', $field_name)->where('language_url', $language)->get();
        } else {
            $translate = Translate::where('table_name', $table_name)->where('field_id', $field_id)->where('field_name', $field_name)->where('language_url', $language)->first();
        }

        if ($translate != null and $field_id != null) {
            $translate = $translate->field_value;
        } elseif ($field_id == null) {
            if ($translate->count() == 0) {
                $translate = null;
            }
        }

        if ($language != $default_lang and $translate == null) {
            $translate = self::translate($table_name, $field_name, $default_lang, $field_id);
        }

        return $translate;
    }

    public static function translateAllLang($table_name, $field_id, $field_name)
    {
        $languages = Lang::all()->where('status', '1');

        foreach ($languages as $language) {
            $translates = Translate::where('table_name', $table_name)
                ->where('field_id', $field_id)
                ->where('field_name', $field_name)
                ->where('language_url', $language->url)
                ->first();
            $result[$language->url] = $translates != null ? $translates['field_value'] : null;
        }

        return $result;
    }

    public static function translateCreateOrUpdate($table_name, $field_name, $language, $field_id, $field_value)
    {
        Translate::updateOrCreate([
            'table_name' => $table_name,
            'field_name' => $field_name,
            'language_url' => $language,
            'field_id' => $field_id
        ], [
            'field_value' => $field_value
        ]);
    }

    public static function searchContent()
    {
        $language = app()->getLocale();
        $search = request('search');
        $articles_data = Translate::where('table_name', 'articles')
            ->where('language_url', $language)
            ->where('field_name', 'title')
            ->where('field_value','LIKE','%'.$search.'%')
            ->get()->toArray();
        $projects_data = Translate::where('table_name', 'projects')
            ->where('language_url', $language)
            ->where('field_name', 'name')
            ->where('field_value','LIKE','%'.$search.'%')
            ->get()->toArray();
        $regulations_data = Translate::where('table_name', 'regulations')
            ->where('language_url', $language)
            ->where('field_name', 'title')
            ->where('field_value','LIKE','%'.$search.'%')
            ->get()->toArray();
            $articles = Article::whereIn('id', array_column($articles_data, 'field_id'))->get();;
            $projects = Project::whereIn('id', array_column($projects_data, 'field_id'))->get();;
            $regulations = Regulation::whereIn('id', array_column($regulations_data, 'field_id'))->get();;
        $data = [
            'projects' => $projects,
            'articles' => $articles,
            'regulations' => $regulations
        ];
        return $data;
    }

    public static function writeFile($lang, $translates, $file){
        $my_file = base_path() .'/resources/lang/'.$lang.'/'.$file.'.php';
        $handle = fopen($my_file, 'w+');
        fwrite($handle, "<?php\n");
        fwrite($handle, "return [\n");
        foreach($translates as $key => $value){
            $array = "\"".$key."\" => \"".$value."\",\n";
            fwrite($handle, $array);
        }
        fwrite($handle, "];\n");
        fclose($handle);
    }
}
