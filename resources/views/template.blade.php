<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spk Rekomendasi Kost</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="kost">Daftar Kost</a>
                    <a class="nav-item nav-link" href="bobot">Bobot</a>
                    <a class="nav-item nav-link" href="#">Rekomendasi</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center mb-3">@yield('header')</h3>
        @yield('content')
    </div>
</body>

</html>