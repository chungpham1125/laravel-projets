<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    function update(Request $request){
        $id = Auth::id();
        $user_form = $request->all();
        $validator = Validator::make($user_form, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email,{$id}"],
            'phone_number' => ['required','min:6', 'regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{2,4}$/'],
        ],[
            'phone_number.regex' => '電話番号は、半角数字と半角ハイフンで入力してください。'
        ]);
        if($validator->fails()){
            return redirect('/user/edit')
            ->withErrors($validator)
            ->withInput();
        }else{
            unset($user_form['_token']);
            User::where('id', $id)->update($user_form);
            return redirect()->route('home')->with('status', '情報を更新しました。');
        }
    }
}
