<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-Movie List</title>
</head>
<body>
    <h1>Movie List </h1>
    <ul>
        @foreach ($products as $product)
        <li>
            <strong>{{ $product ['title'] }} </strong> - {{ $product ['year'] }} - Genre: {{ $product['genre'] }} 
        </li>
        @endforeach
    </ul>
</body>
</html>