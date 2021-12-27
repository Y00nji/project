<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function login() {
        return 'Ввод email, пароль';
    }
    public function registration() {
        return 'Ввод email, ФИО, серия, номер';
    }
    public function page() {
        return 'вся информация о пользователе';
    }
}
