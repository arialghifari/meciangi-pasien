@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

<form action="" class="col-md-3 mx-auto">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="tempat-lahir">Tempat Lahir</label>
        <input type="text" id="tempat-lahir" class="form-control">
    </div>
</form>

@endsection