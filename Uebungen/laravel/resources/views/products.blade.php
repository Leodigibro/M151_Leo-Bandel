<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body 
        {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
            <th>Images</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td><a href="/product/{{$product->id}}">Link to the product</a></td>
            <td><img width="100px" src="{{asset($product->image)}}"></td>
        </tr>
        @endforeach
    </table>
    <a href="/Warenkorb">Hier geht es zum Warenkorb</a>
</body>
</html>