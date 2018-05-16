<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
    @foreach ( $productos as $producto ) 
<li> {!! $producto->name !!}</li>
    @endforeach
</body>
</html>