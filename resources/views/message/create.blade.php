@extends('app')

<body class="container">
    <main role="main" class="container">

        @if ($newsCount == 3)
            <div class="row">
                <h1>you already added 3 news</h1>
            </div>
        @else
            <div class="row">
                <form action="/messages" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image_path">Image:</label><br>
                        <input type="file" class="form-control-file" id="image_path" name="image_path">
                        @error('image_path') <small style="color:red">{{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="retail">Retail:</label><br>
                        <input type="text" id="retail" name="retail" autocomplete="off" value={{ $name }}
                            readonly="readonly">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="headline">Headline:</label><br>
                        <input type="text" id="headline" name="headline" autocomplete="off"
                            value="{{ old('headline') }}">
                        @error('headline')<small style="color:red">{{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label><br>
                        <input type="text" id="body" name="body" autocomplete="off" value="{{ old('body') }}">
                        @error('body') <small style="color:red">{{ $message }} </small>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Add message</button>
                </form>
            </div>
        @endif

        <a href="/">Back</a>
        </div>
        </div>
</body>
