@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

@foreach ($pasien as $p)
<div class="conainer-fluid">
    <form action="{{ action('PasienController@updatePasien') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <img class="rounded mx-auto d-block" width="100px" src="/assets/pasien/{{ $p->foto }}" alt="">
        
        <input type="hidden" value="{{ $p->id }}" name="id">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $p->nama }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ $p->tempat_lahir }}">
            </div>
            <div class="col-md-2">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $p->tanggal_lahir }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $p->alamat }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="no-hp">No Hp</label>
                <input type="number" name="no_hp" class="form-control" value="{{ $p->no_hp }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="diagnosa">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" value="{{ $p->diagnosa }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="tanggal-masuk-rs">Tanggal Masuk Rs</label>
                <input type="date" name="tanggal_masuk_rs" class="form-control" value="{{ $p->tanggal_masuk_rs }}">
            </div>
            {{-- <div class="col-md-2">
                <label for="foto-pasien">Foto Pasien</label>
                <input type="file" name="foto_pasien" class="form-control" style="heigt:50px;">
            </div> --}}
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Update Pasien</button>
                <a class="btn btn-danger" href="{{ action("PasienController@index") }}">Kembali</a>
            </div>
        </div>
    </form>
    
</div>    

@endforeach

@endsection