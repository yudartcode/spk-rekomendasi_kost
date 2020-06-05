@extends('template')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome to </br>Kost Recommendation System 0.1.40</h1>
    <p class="lead">This system can give you a Kost recommendation for students which lecture at Bumigora University</p>
    <hr class="my-4">
    <p>We hope you helped using this system :)</p>
    <p>Created by :</p>
    (1710520118) Agung Eka Saputra <br>
    (1710520113) Gilang Restu Alam <br>
    (1710520112) L Yuda Rahmani Karnaen <br>
    (1710510135) Farasut Widodo Malik <br>
    (1710510148) Moh. Arief Wicaksono<br><br>
    <a class="btn btn-primary btn-lg" href="{{route('bobot')}}" role="button">Let's Rock</a>
</div>
@endsection