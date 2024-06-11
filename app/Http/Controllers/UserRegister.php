<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use voku\helper\ASCII;
use Illuminate\Support\Facades\Auth;

class UserRegister extends Controller
{
    public function index()
    {
        return view("registration.register");
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name'=>'',
            'email'=>'',
            'password'=>'',
        ]);

       User::create($data);
       return redirect()->route('post.index');

    }
    public function login()
    {
        return view('login.login');
    }

    public function sign(Request $request)
    {
        // Валидация данных
        $credentials = $request->validate([
            'name' => '',
            'password' => '',
        ]);

        // Попытка аутентификации
        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            $request->session()->regenerate();

            return redirect()->route('post.index'); // Перенаправление на защищённую страницу
        }

        // Аутентификация не удалась
        return back()->withErrors([
            'auth' => 'Данные не верны.',
        ])->onlyInput('name');
    }
}
