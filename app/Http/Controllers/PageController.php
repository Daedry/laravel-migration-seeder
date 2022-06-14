<?php

namespace App\Http\Controllers;

use App\Viaggio;

use Illuminate\Http\Request;

class ViaggioContoroller extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        dd($viaggi);
        return view('viaggi.index', compact('viaggi'));
    }

}
