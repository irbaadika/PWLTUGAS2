<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class komentarController extends Controller
{
    public function komentar(){
        return view('komentar',[
            "title" => "komentar"
        ]);
}
}
