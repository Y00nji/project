<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function login() {
        return 'Ввод email';
        return 'Ввод пароль';
    }
    public function registration() {
        return 'Ввод email';
        return 'Ввод ФИО';
        return 'Ввод серия номер';
        return 'Вывод пароль';
    }
    public function page() {
        return 'вся информация о пользователе';
    }
}
