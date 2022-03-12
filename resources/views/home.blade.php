@extends('layouts.tema')

@section('content')
<link rel="stylesheet" href="css/irba.css">
    <div class="bg"></div>
    <div class="home">
        <h3>Hello.</h3>
        <h1>I am <span>Irba Adika Jaya</span></h1>
        <p>Ini adalah website portofolio saya yang dibuat menggunakan framework laravel</p>
    </div>
    <a href="http://127.0.0.1:8000/biodata" class="btn">More About Me</a>

    <div class="sosmed">

        <a href="https://www.facebook.com/irba.adikajaya">
            <img src="../facebook.png" alt="fb">
        </a>

        <a href="https://www.instagram.com/irbaadikajaya/">
            <img src="../instagram.png" alt="ig">
        </a>

        <a href="mailto:irbaadika123@gmail.com">
            <img src="../email.png" alt="e-mail">
        </a>
                    
    </div>
@endsection