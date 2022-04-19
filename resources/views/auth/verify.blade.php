@extends('layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAJ</title>
    <style>
    @import url(https://www.w3schools.com/w3css/4/w3.css);
    @import url(https://fonts.googleapis.com/css?family=Raleway); 
    

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: linear-gradient(to bottom right, #00008B, #FFC0CB);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='blue', endColorstr='pink',GradientType=1 );
}
input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: hsla(0, 100%, 90%, 0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: none;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	
}

</style>
</head>
<body>
<div class="verify">





@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifier votre Boite mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification a été envoyé à votre adresse email.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre email pour un lien de vérification.') }}
                    {{ __('Si vous n avez pas reçu l email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>
</body>
</html>