@extends('template')
@section('header')
    Tabel Normalisasi Kriteria
@endsection
@section('content')
<table class="table table-hover table-bordered table-sm">
    <thead>
        <tr>
            <th scope="col">Kriteria</th>
            <th scope="col">Jarak Kampus</th>
            <th scope="col">Jarak Market</th>
            <th scope="col">Harga</th>
            <th scope="col">Kebersihan</th>
            <th scope="col">Keamanan</th>
            <th scope="col">Fasilitas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nKriteria as $i)
        <tr>
            <th scope="row">{{$i->kriteria}}</th>
            <td>
                {{$i->jarak_kampus}}
            </td>
            <td>            
                {{$i->jarak_market}}
            </td>
            <td>            
                {{$i->harga}}
            </td>
            <td>            
                {{$i->kebersihan}}
            </td>
            <td>            
                {{$i->keamanan}}
            </td>
            <td>            
                {{$i->fasilitas}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col d-flex justify-content-center">
        <a href="uji-konsistensi-ahp" class="btn btn-primary">Uji Konsistensi</a>
    </div>
</div>
@endsection