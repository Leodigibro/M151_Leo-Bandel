<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body 
        {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<h3>Warenkorb</h3>
        <p style="text-align:right;">Preis:</p>
        @foreach ($products as $item)
            @if (!($amount[$item['id'] - 1] == 0 || $amount[$item['id'] - 1] === null))
              
                    <img width="100px" src="{{ asset($item->image) }}">
                    <br><br><br>
                    <ul>
                        <li>
                            <label>Produkt: {{ $item['name'] }}</label>
                        </li>
                        <li>
                            <label>Einzelpreis: {{ $item['price'] }} Fr.</label>
                        </li>
                        <li>
                            <label>Menge im Warenkorb: {{ $amount[$item['id'] - 1] }}</label>
                        </li>
                    </ul><br><br>
                    <p style="text-align: right;">{{ $item['price'] * $amount[$item['id'] - 1] }} Fr.</p>
                
            @endif
        @endforeach
</body>
</html>