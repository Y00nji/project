<?php

namespace App\Http\Controllers;
use App\Models\абитуриент;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request) {
        $абитуриент = абитуриент::find($request->idАбитуриента);
     
        $абитуриент->Фамилия = $request->Фамилия;     
        $абитуриент->Имя = $request->Имя;
        $абитуриент->Отчество = $request->Отчество;
         $абитуриент->update();
        return redirect()->back();
      }
    }
