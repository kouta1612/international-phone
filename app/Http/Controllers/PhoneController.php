<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        dd($request->phone);
    }
}
