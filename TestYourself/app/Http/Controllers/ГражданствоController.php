<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Гражданство;

class ГражданствоController extends Controller
{
    public function Гражданство()
    {
        $гражданство_список = Гражданство::all();
        return view('home', ['Гражданство' => $гражданство_список]);
    }
}
