<?php

namespace App\Http\Controllers;

use App\Viaggio;

use Illuminate\Http\Request;

class ViaggioController extends Controller
{
    public function index()
    {
         $viaggi=viaggio::all();
        dd($viaggi);
            return view('home', compact('viaggi'));
    }
}
