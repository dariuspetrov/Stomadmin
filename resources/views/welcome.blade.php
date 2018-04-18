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
                        <h1>Stomadmin</h1>
				<p>
					Bine ati venit pe platforma Stomadmin. La noi veti avea parte de cele mai bune servicii in domeniul stomatologic la cel mai mic pret posibil. În perspectiva noastra profesionalismul este cheia succesului.
				</p>
	
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
