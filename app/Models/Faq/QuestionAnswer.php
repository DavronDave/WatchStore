<?php

namespace App\Models\Faq;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class QuestionAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getQuestionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('question_answers', 'question', $language, $this->id);
    }

    public function getAnswerAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('question_answers', 'answer', $language, $this->id);
    }

    public static function store($data)
    {
        $questions = $data['question'];
        $data['question'] = $questions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $answers = $data['answer'];
        $data['answer'] = $answers['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $question = self::create($data);
        foreach ($questions as $key => $value){
            PublicMethod::translateCreateOrUpdate('question_answers', 'question', $key, $question->id, $value);
            PublicMethod::translateCreateOrUpdate('question_answers', 'answer', $key, $question->id, $answers[$key]);
        }
    }

    public static function edit($data, $question)
    {

        $questions = $data['question'];
        $data['question'] = $questions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $answers = $data['answer'];
        $data['answer'] = $answers['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $question->update($data);
        //Save translates
        foreach ($questions as $key => $value){
            PublicMethod::translateCreateOrUpdate('question_answers', 'question', $key, $question->id, $value);
            PublicMethod::translateCreateOrUpdate('question_answers', 'answer', $key, $question->id, $answers[$key]);
        }
        return $question;
    }
}
