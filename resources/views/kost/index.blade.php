@extends('template')
@section('header')
Daftar Kost
@endsection
@section('content')
<div class="card shadow">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kost</th>
                <th scope="col">Jarak Ke Kampus</th>
                <th scope="col">Jarak Ke Market</th>
                <th scope="col">Kebersihan</th>
                <th scope="col">Keamanan</th>
                <th scope="col">Fasilitas</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kost as $i)
            <tr>
                <td scope="row">{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>{{$i->jarak_kampus}} Km</td>
                <td>{{$i->jarak_market}} Km</td>
                <td>{{$i->kebersihan}}</td>
                <td>{{$i->keamanan}}</td>
                <td>{{$i->fasilitas}}</td>
                <td>Rp. {{$i->harga}},00</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row ">
        <div class="col d-flex justify-content-center">
            {{$kost->links()}}
        </div>
    </div>
</div>

@endsection