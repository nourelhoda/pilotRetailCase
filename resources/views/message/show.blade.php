@extends('app')

<body>
    <a href="/">Go to home</a>
    @forelse($result as $res)
        <div class="panel panel-success">
            <div class="panel-heading">{{ $res->headline }}</div>
            <div class="panel-body">

                <p>{{ $res->body }}</p>

                <img src="{{ asset('images/' . $res->image_path) }}" alt="">
            </div>
        </div>

    @empty
        <p>No news to show</p>
    @endforelse
    <a href="/">Back</a>
</body>


</html>
