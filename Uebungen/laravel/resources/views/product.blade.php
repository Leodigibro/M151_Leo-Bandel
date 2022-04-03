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
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->manual}}</td>
            <td>{{$product->price}}</td>
            <td><img width="100px" src="{{asset($product->image)}}"></td>
            <td>
                <form action="/Warenkorb/{{ $product->id }}" method="POST">
                @csrf
                <input type="number" name="amount" min="1" max="99" placeholder="0" required>
                <button type="submit" name="cartbtn">Zum Warenkorb hinzufügen</button>
                </form>
            </td>
            <td><a href="/Warenkorb/{{ $product->id }}">In Warenkorb hinzufügen</a></td>
        </tr>
    </table>
</body>
</html>