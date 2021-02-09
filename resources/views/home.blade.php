<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        text-align: center;
    }
</style>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($cars as $car)
    <h2>{{ $car->name }}</h2>
    <h4>{{ $car->model }}</h4>
    <small>{{ $car->price }}€</small>
    <hr>
    @endforeach
  </body>
</html>
