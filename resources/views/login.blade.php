<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | login</title>
</head>
<body>
    <h1>Selamat datan di menu Login</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="Username"></label>
        <br>
        <input type="text" placeholder="Input Username" name="name">
        <br>
        <label for="Password"></label>
        <br>
        <input type="text" placeholder="Input Password" name="password">
        <br>
        <button style="margin: 20px 0 20px 0">Login</button>
    </form>
    <a href="/">Back?</a>
</body>
</html>