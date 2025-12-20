<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LAZAPP</title>
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>

    <body>
    <div class="container py-5">
        <!-- Kotak (Card) -->
        <br/><br/><br/><br/><br/><br/>
        <div class="card" style="max-width: 300px; margin: auto; background-color: lightgreen;">
            <div class="card-body text-center" >
                <br/><br/>
                <h5 class="card-title" style="font-weight: bold;  font-size: 20px;">WEBAPP LAZNAS</h5>
                <br/>
                <p class="card-text">:::</p>
                <!-- Button -->
                <br/><br/>
                <button type="button" class="btn btn-warning" onclick="window.location.href='http://localhost:8000/fund';">CRM/FUNDRAISER</button><br/><br/><br/>
                <button type="button" class="btn btn-warning" onclick="window.location.href='http://localhost:8000/fin';">KEUANGAN</button>
                <br/><br/><br/><br/><br/>            
            </div>
        </div>
    </div>
    </body>
</html>                
