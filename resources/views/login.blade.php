<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>
    </head>
    <body>
     
<h1>login client</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="login">
        </form>
    </body>