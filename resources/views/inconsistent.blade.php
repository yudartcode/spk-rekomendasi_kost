@extends('template')
@section('content')
<div class="jumbotron">
    <h1 class="display-4" style="color: red">Inconsistent Matrix Kriteria</h1>
    <p class="lead">Matrix kriteria berpasangan yang diinputkan tidak konsisten <br>sehingga tidak dapat melanjutkan
        perhitungan</p>
    <hr class="my-4">

    <div class="row">
        <div class="col-4">
            <table class="table table-hover table-bordered">
                <tr>
                    <td><strong>Lambda</strong></td>
                    <td>{{$lambda}}</td>
                </tr>
                <tr>
                    <td><strong>CI</strong></td>
                    <td>{{$ci}}</td>
                </tr>
                <tr>
                    <td><strong>CR</strong></td>
                    <td>{{$cr}}</td>
                </tr>
            </table>
        </div>
    </div>

    <a class="btn btn-primary btn-lg" href="{{route('bobot')}}" role="button">Input Matrix</a>
</div>
@endsection