<!DOCTYPE html>
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


<h1>Show Messages</h1>
<form action="/messages/?retails='value'" method="GET">
   <label for="retails">choose</label>
   <select id="retails" name="retails">
      <option value="all">All</option>
     <option value="north">North</option>
     <option value="south">South</option>
     <option value="middle">Middle</option>
     <option value="east">East</option>
   </select>
   <input type="submit" value="Send">
 </form>

@forelse($messages as $message)
<div class="panel panel-default">
    <div class="panel-heading"><a href="/messages/{{$message->retail}}">{{$message->retail}}</a> </div>
  
    <div class="panel-body">
        <p><strong>{{$message->headline}}</p></strong>
            <br>
        <p><strong>{{$message->body}}</strong></p> 
        <img src="{{ asset('images/'.$message->image_path)}}" alt="">
    </div>
</div>


@empty
<p>No news to show</p>
@endforelse

</html>