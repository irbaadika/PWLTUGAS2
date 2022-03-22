<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;

class biodataController extends Controller
{
    public function biodata(){
        return view('biodata',[
            "title" => "biodata",
            "nama" => biodata::getNama(),
            "ttl" => biodata::getTtl(),
            "jenkel" => biodata::getJenkel(),
            "agama" => biodata::getAgama(),
            "alamat" => biodata::getAlamat(),
            "telepon" => biodata::getTelepon(),
            "email" => biodata::getEmail(),
            "status" => biodata::getStatus()
        ]);  
    }
}
