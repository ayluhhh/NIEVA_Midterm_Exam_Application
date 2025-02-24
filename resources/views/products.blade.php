<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #444;
        }
        ul {
            list-style: none;
            padding: 0;
            max-width: 400px;
            margin: 0 auto;
        }
        li {
            background: white;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        strong {
            color: #222;
        }
    </style>
</head>
<body>
    <h1>Movie List</h1>
    <ul>
        @foreach ($products as $product)
        <li>
            <strong>{{ $product['title'] }}</strong> - {{ $product['year'] }} - Genre: {{ $product['genre'] }}
        </li>
        @endforeach
    </ul>
</body>
</html>
