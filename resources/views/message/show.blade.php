<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
   <a href="/">Go to home</a>
   @forelse($result as $res)
   <div class="panel panel-success">
      <div class="panel-heading">{{$res->headline}}</div>
      <div class="panel-body">
         
         <p>{{$res->body}}</p>
      
         <img src="{{ asset('images/'.$res->image_path)}}" alt=""></div>
    </div>
     
   @empty
   <p>No news to show</p>
   @endforelse
</body>


</html>