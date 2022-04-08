<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;

class biodataController extends Controller
{
    public function biodata(){
        return view('biodata',[
            "title" => biodata::first()->title,
            "nama" => biodata::first()->nama,
            "ttl" => biodata::first()->ttl,
            "jenkel" => biodata::first()->jenkel,
            "agama" => biodata::first()->agama,
            "alamat" => biodata::first()->alamat,
            "telepon" => biodata::first()->telepon,
            "email" => biodata::first()->email,
            "status" => biodata::first()->status
        ]);  
    }
}
