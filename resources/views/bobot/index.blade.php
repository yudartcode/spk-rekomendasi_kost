@extends('template')
@section('header')
Bobot Kriteria
@endsection
@section('content')
<form action="{{route('bobot.store')}}" method="POST">
    @csrf

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
            <div hidden>{{$loop = $loop->index}}</div>
            <tr>
                <th scope="row">{{str_replace('_', ' ', $i->kriteria)}}</th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="{{"jk$loop"}}" id="" value="{{$i->jarak_kampus}}">
                    </div>
                </th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="j{{"m$loop"}}" id="" value="{{$i->jarak_market}}">
                    </div>
                </th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="{{"h$loop"}}" id="" value="{{$i->harga}}">
                    </div>
                </th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="k{{"b$loop"}}" id="" value="{{$i->kebersihan}}">
                    </div>
                </th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="k{{"a$loop"}}" id="" value="{{$i->keamanan}}">
                    </div>
                </th>
                <th>
                    <div class="form-group">
                        <input type="text" class="form-control" name="{{"f$loop"}}" id="" value="{{$i->fasilitas}}">
                    </div>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="float-right mb-4">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>
@endsection