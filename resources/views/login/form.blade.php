@extends('templete')
@section('main_content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <br> <br> <br>  <br> <br> <br>
</head>
<body style="padding-top: 56px;">
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <!-- <img src="logo.png" alt=""> -->
                    <h1 class="card-title">Connexion</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Se connecter</button> <br>
                            </div> 
                             <a href="{{ route('register') }}" class="btn btn-success d-grid">Créer un compte</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body> 
<br><br><br> <br> 
<br><br><br> 
</html>
@endSection()
