@extends('templete')
@section('main_content') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head> 
<br>  <br>
<body style="padding-top: 56px;">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1 style="color: DodgerBlue; text-align: center;">Formulaire de contact</h1>
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="9"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-3" style="margin-top: 56px;">
            <div class="headline"><h3 style="color: DodgerBlue;">Adresse</h3></div>
            <ul class="list-unstyled who" style="margin-bottom: 30px;">
                <li><i class="fa fa-home" style="color: DodgerBlue;"></i> Lot Foutouh,Imm 177, App 3 Av De Caire Temara </li>
                <li><i class="fa fa-envelope" style="color: DodgerBlue;"></i> BaazizTechno@gmail.com</li>
                <li><i class="fa fa-phone" style="color: DodgerBlue;"></i> +212 62 82 319 1</li>
            </ul>

            <div class="headline"><h3 style="color: DodgerBlue;">Heures d’ouverture</h3></div>
            <ul class="list-unstyled " style="margin-bottom: 30px;">
                <li><strong>Lundi-samedi:</strong> Disponible 9 h à 6 h</li>
            </ul>

            <div class="headline"><h3 style="color: DodgerBlue;">Pourquoi nous ?</h3></div>
            <p>Notre entreprise se positionne comme un guichet unique pour répondre à tous vos besoins. Nous vous offrons une expertise complète en études et installations de fibre optique, ainsi qu'en services de conseil.</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check" style="color: DodgerBlue;"></i> Assistance 24 heures sur 24, 7 jours sur 7.</li>
                <li><i class="fa fa-check" style="color: DodgerBlue;"></i> Des ingénieurs éminents et expérimentés.</li>
                <li><i class="fa fa-check" style="color: DodgerBlue;"></i> Solution aux problèmes.</li>
            </ul>
        </div>
    </div>
</div> 
    
</body>
</html>
@endsection

