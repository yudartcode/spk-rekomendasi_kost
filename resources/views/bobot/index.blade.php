@extends('template')
@section('header')
Bobot Kriteria
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
        @foreach ($bobot as $i)
        <tr>
            <th scope="row">{{$i->kriteria}}</th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->jarak_kampus}}">
                </div>
            </th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->jarak_market}}">
                </div>
            </th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->harga}}">
                </div>
            </th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->kebersihan}}">
                </div>
            </th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->keamanan}}">
                </div>
            </th>
            <th>
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" value="{{$i->fasilitas}}">
                </div>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="float-right mb-4"><input type="button" value="Simpan" class="btn btn-primary"></div>
@endsection