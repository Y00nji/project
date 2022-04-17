<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Гражданство;
use App\Models\Вид_удостоверения;
use Illuminate\Support\Facades\DB;

class ВыборкаБазыController extends Controller
{
    public function ВыборкаБазы()
    {
        $Гражданство_список = Гражданство::all();
        $Виды_удостоверений_список = Вид_удостоверения::all();
        return view('home', ['Гражданство_список' => $Гражданство_список],
                            ['Виды_удостоверений_список' => $Виды_удостоверений_список]
                    );
        // $гражданство_список = DB::table('Гражданство')->get();
        // return view('/home', ['Гражданство_список' => $Гражданство_список]);
    }
}
