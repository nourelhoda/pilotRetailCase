@extends('app')
@if($newsCount==3)
<h1>you already added 3 news</h1>
@else
<form action="/messages" method="POST" enctype="multipart/form-data">
    <label for="image_path">Image:</label><br>
        <input type="file" id="image_path" 
            name="image_path" >
            <br>
        @error('image_path') <small style="color:red">{{$message}} </small>
        @enderror
        <br>

    <label for="retail">Retail:</label><br>
        <input type="text" id="retail" 
            name="retail" autocomplete="off" value={{$name}}
            readonly="readonly">
            <br>
{{-- 
        @error('retail') <small style="color:red">{{$message}} </small>  
        @enderror --}}
        <br>
    <label for="headline">Headline:</label><br>
        <input type="text"
            id="headline" name="headline"
            autocomplete="off"
            value="{{old('headline')}}">
            <br>
            
        @error('headline')<small style="color:red">{{$message}} </small> 
        @enderror
        <br>
    <label for="body">Body</label><br>
        <input type="text" id="body"
            name="body" autocomplete="off"
            value="{{ old('body') }}">
            <br>
            @error('body') <small style="color:red">{{$message}} </small>
            @enderror
           <br>
    <button>Add Message</button>
    @csrf
  </form> 
 
  @endif

  <a href="/">Back</a>

 