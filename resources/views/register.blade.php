<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Register</title>
</head>
<body>
    <h1>Selamat datan di menu Register</h1>
    <form action="/register" method="POST">
        @csrf
        <label for="username">Username </label>
        <br>
        <input type="text" name="username" placeholder="Input Username">
        <br>
        <label for="password">password </label>
        <br>
        <input type="text" name="password" placeholder="Input Password">
        <br>
        <label for="email">Email </label>
        <br>
        <input type="text" name="email" placeholder="Input Email">
        <br>
        <button style="margin: 20px 0 20px 0" type="submit">Daftar</button>
    </form>
    <a href="/">Back?</a>
</body>
</html>