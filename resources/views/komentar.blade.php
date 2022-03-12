@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

@endsection