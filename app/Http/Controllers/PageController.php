<?php

namespace App\Http\Controllers;

use App\Viaggio;

use Illuminate\Http\Request;

class PageContoroller extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        dd($viaggi);
        return view('viaggi', compact('viaggi'));
    }

}
