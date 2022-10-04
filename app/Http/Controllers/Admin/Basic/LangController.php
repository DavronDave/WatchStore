<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Langs\StoreLangRequest;
use App\Http\Requests\Langs\UpdateLangRequest;
use App\Models\Basic\Lang;
use App\Models\Methods\PublicMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Lang as Language;

class LangController extends Controller
{
    public function index()
    {
        $languages = Lang::all();
        return view('pages/languages/index', compact('languages'));
    }

    public function show(Lang $lang)
    {
        $labels = Language::get('locale');
        $menus =  Language::get('menus');
        $ru_labels = Language::get('locale');
        $ru_menus = Language::get('menus');
        return view('pages/languages/show', compact('lang','labels', 'menus', 'ru_menus', 'ru_labels'));
    }

    public function create()
    {
        return view('pages/languages/create');

    }

    public function store(StoreLangRequest $request)
    {
        Lang::store($request->validated());
        return redirect()->route('admin.language.index');
    }

    public function edit(Lang $lang)
    {
        app()->setLocale($lang->url);
        $labels = Language::get('locale');
        $menus =  Language::get('menus');
        app()->setLocale('ru');
        $ru_labels = Language::get('locale');
        $ru_menus = Language::get('menus');
        return view('pages/languages/edit', compact('lang', 'labels', 'menus', 'ru_menus', 'ru_labels'));
    }

    public function update(UpdateLangRequest $request, Lang $lang)
    {
        $data = $request->validated();
        $labels = $data['labels'];
        unset($data['labels']);
        $menus = $data['menus'];
        unset($data['menus']);
        PublicMethod::writeFile($lang->url, $labels, 'locale');
        PublicMethod::writeFile($lang->url, $menus, 'menus');
        Lang::edit($data, $lang);
        return redirect()->route('admin.language.index');
    }
}
