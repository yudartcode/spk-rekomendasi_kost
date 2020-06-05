@extends('template')
@section('header')
Result
@endsection
@section('content')
<div class="card shadow">
    <div class="card-header">
        <strong>Hasil Rekomendasi Kost</strong>
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kost</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $i)
            <tr>
                <td scope="row">{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>{{$i->val}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card-footer">
        <a href="hitung-ulang" class="btn btn-primary float-right">Hitung Ulang</a>
    </div>
</div>
@endsection