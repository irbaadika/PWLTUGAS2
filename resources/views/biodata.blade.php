@extends('layouts.tema')

@section('content')
    <div class="container">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Data Diri</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Nama</td>
            <td>{{ $nama }}</td>
            <td rowspan="8">
                <img src="../me.png" alt="gambar1">
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tempat, Tanggal Lahir</td>
            <td>{{ $ttl }}</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jenis Kelamin</td>
            <td>{{ $jenkel }}</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Agama</td>
            <td>{{ $agama }}</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Alamat</td>
            <td>{{ $alamat }}</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Telepon</td>
            <td>{{ $telepon }}</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Email</td>
            <td>{{ $email }}</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Status</td>
            <td>{{ $status }}</td>
          </tr>
        </tbody>
      </table>
      
    </div>
@endsection