<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  @foreach ($articles as $item)
    <h1>{{$item->title}}</h1>
    <h2>{{$item->subtitle}}</h2>
    <strong>{{$item->author}}</strong>
    <p>{{$item->text}}</p>
    <strong>{{$item->publication_date}}</strong>
    <hr>
      
  @endforeach
  
</body>
</html>