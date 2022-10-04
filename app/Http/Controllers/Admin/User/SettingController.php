<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('pages.setting.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        $data = $request->validated();
        if (!is_null($data['old_password'])) {
            $hashedPassword = Auth::user()->password;
            if (!\Hash::check($data['old_password'], $hashedPassword)) {
                return back()->withErrors(['old_password' => __('auth.password')])->withInput();
            }
        }
        User::edit($data);
        return redirect()->route('admin.setting.edit')->with('message', __('Успешно обновлено'));
    }
}
