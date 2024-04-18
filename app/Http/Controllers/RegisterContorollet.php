<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Web\Controllers\Controller;

class RegisterContorollet extends Controller
{
    
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.privat'));
        }
        $validateFields = $request->validate([
            'email' => 'require|email',
            'password' => 'require'
        ]);

        $user = User::create($validateFields);
        if($user){
            auth()->login($user);
            return redirect(route('user.private'));
        }
        return redirect(route('user.private'))->withErrors([
            'formError' => 'Произошла ошибка при сохранение пользователя'
        ]);
    }
}
