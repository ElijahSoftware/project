<?php

namespace App\Http\Controllers; 
use App\Models\training;
use Illuminate\Http\Request;

class TaakController extends Controller
{
    public function index()
    {
        $opdracht = training::all();

        return view('les1/welcome', compact('opdracht'));
    }


    public function show($id)
    {

        $opdracht = training::find($id);

        return view('les1/taken', compact('opdracht'));
    }
}
