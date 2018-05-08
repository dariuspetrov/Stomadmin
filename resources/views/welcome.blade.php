<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Stomadmin</title>
    </head>
    <body>
        @include('layouts.nav')

        <div class="flex-center position-ref full-height">
            <div class="container-fluid index-background">
                <div class="row">
                    <div class="welcome-content">
                        <h1><b>Stomadmin</b></h1><hr>
                        <p> Bine ați venit pe platforma Stomadmin! La noi veți beneficia de cele mai bune servicii în domeniul stomatologic, la cel mai mic preț posibil! În perspectiva noastră profesionalismul este cheia succesului. </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
