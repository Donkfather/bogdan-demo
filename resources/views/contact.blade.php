<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunt barosan</title>
</head>
<body>
    <h1>Contact bo$$$</h1>
    @if(!empty($email))
        <div>Sanke: {{$email}}!</div>
    @else
    <form action="/contact" method="post">
        @csrf
        <input type="email" name="email"/>
        <input type="submit" value="Send">
    </form>
    @endempty
</body>
</html>
