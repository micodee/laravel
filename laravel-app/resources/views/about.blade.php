@extends('layouts/main')

@section('container')
<h1>halaman about</h1>
<h3>@php
    echo $nama;
@endphp</h3>
<h3><?= $email; ?></h3>
<img src="/img/{{ $image }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle">
@endsection
