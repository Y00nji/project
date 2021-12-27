<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function enter() {
        return 'авторизация';
    }
    public function hello() {
        return 'welcome';
    }
}
