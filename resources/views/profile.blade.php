@extends('layout.app')
@section('content')

    <div class="container-sm mt-5">
        <div class="row">
            <hr>
            <h1>Biodata Mahasiswa</h1>
            <hr>
            <div class="col-md-auto">
            </div>
            <div class="text-center">
                <img src="{{ Vite::asset('resources/img/IMG_2433.jpg') }}" class="rounded"alt="image" height="" width="">
              </div>
              <div class="col-md-auto">
                <h4>Nama Lengkap</h4>
                <h4>Tempat, Tanggal Lahir</h4>
                <h4>E-Mail</h4>
                <h4>Kelas</h4>
                <h4>Jurusan</h4>
                <h4>Universitas</h4>
            </div>
            <div class="col">
                <h4>: Bintang Azis Satrio Wibowo</h4>
                <h4>: Gresik, 02 Mei 2002</h4>
                <h4>: bintangazissatriowibowo@gmail.com</h4>
                <h4>: IS-05-02</h4>
                <h4>: Sistem Informasi</h4>
                <h4>: Telkom University Surabaya</h4>
        </div>

    </div>
@endsection
