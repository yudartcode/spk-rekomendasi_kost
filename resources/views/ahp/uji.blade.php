@extends('template')
@section('header')
Uji Konsistensi
@endsection
@section('content')
<div class="alert alert-success">
    <h4 class="text-center">Nilai = {{$kons}} - Status : {{$status}}</h4>
</div>
<a href="normalisasi-kriteria-ahp" class="btn btn-primary">Normalisasi Kriteria</a>
@endsection