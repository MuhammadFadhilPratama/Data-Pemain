<?php

namespace App\Http\Controllers;
use App\Models\pemain;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        return view('pemain', [
            "title" => "Pemain",
            "pemain" => Pemain::all()
        ]);
    }

    public function show(Pemain $pemain_detil)
    {
        return view('pemain_detil', [
            "title" => "Pemain Detil",
            "pemain_detil" => $pemain_detil
        ]);
    }
}
