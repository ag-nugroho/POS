<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <p>ID: <span class="highlight">{{ $id }}</span></p>
        <p>Nama: <span class="highlight">{{ $name }}</span></p>
    </div>
</body>
</html>
