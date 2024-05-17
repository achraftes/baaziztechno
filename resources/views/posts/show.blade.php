@extends('templete')
@section('main_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
 <br> <br> <br> <br> <br>
</head>
<body>

                 <h2 style="text-align: center;">Detail</h2>
                
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-8 mb-4">
            <div class="card">
                <img src="{{ asset('images') }}/{{ $posts->image }}" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{ $posts->title }}:</h3>
                    <h4>{{ $posts->description }}</h4>
                    <h4 class="card-text">{{ $posts->detail }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>





 </body>
</html>
@endsection




