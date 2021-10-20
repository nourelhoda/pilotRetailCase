@extends('app')

<body class="container">
    <main role="main" class="container">
        <div class="row">
            <h1>Show Messages</h1>
            <form action="/messages/?retails='value'" method="GET">
                <label for="retails">Select Retail</label>
                <select id="retails" name="retails">
                    <option value="all">All</option>
                    <option value="north">North</option>
                    <option value="south">South</option>
                    <option value="middle">Middle</option>
                    <option value="east">East</option>
                </select>
                <input type="submit" value="Search">
            </form>

            @forelse($messages as $message)
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/messages/{{ $message->retail }}">{{ $message->retail }}</a>
                    </div>

                    <div class="panel-body">
                        <p><strong>{{ $message->headline }}</p></strong>
                        <br>
                        <p><strong>{{ $message->body }}</strong></p>
                        <img src="{{ asset('images/' . $message->image_path) }}" alt="">
                    </div>
                </div>


            @empty
                <p>No news to show</p>
            @endforelse

            <a href="/">Go back to home</a>
        </div>
    </main>
</body>
