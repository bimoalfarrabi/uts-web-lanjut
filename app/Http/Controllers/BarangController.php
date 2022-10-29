<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function home() {
        $barang['allBarang'] = Barang::all();
        return view('index', ["title" => "Home"], $barang );
    }

    public function review($id) {
        $review = Barang::find($id);
        return view('review', ["title" => "Review"], compact('review'), $review );
    }
}
