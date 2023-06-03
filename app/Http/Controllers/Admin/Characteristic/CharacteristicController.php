<?php

namespace App\Http\Controllers\Admin\Characteristic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Characteristic\StoreCharacteristicRequest;
use App\Models\Banner\Banner;
use App\Models\Basic\Contact;
use App\Models\Basic\Lang;
use App\Models\Characteristic\Characteristic;
use App\Models\Methods\PublicMethod;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    public function index(){
        $characteristics = Characteristic::all();
        return view('pages/characteristics/index', compact('characteristics'));
    }

    public function create(){
        $languages= Lang::all()->where('status','1');
        $types = Characteristic::TYPES;
        return view('pages/characteristics/create', compact('types','languages'));
    }

    public function store(StoreCharacteristicRequest  $request){
        Characteristic::store($request->validated());
        return redirect()->route('admin.characteristic.index');
    }

    public function edit($id){

        $characteristic = Characteristic::find($id);
        $types = Characteristic::TYPES;
        $characteristic = $characteristic->toArray();
        $languages = Lang::where('status', '1')->get();

        $characteristic['name'] = PublicMethod::translateAllLang('characteristics', $characteristic['id'], 'name');
        return view('pages/characteristics/edit', compact('characteristic', 'languages', 'types'));
    }
}
