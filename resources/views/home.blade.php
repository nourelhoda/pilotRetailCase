@extends('app')
    <body>
        <h2>create news for</h2>
        <ul>
            <li><a href="/messages/create?Name=north" class="link-primary">North</a></li>
            <li><a href="/messages/create?Name=south" class="link-primary">South</a></li>
            <li><a href="/messages/create?Name=west" class="link-primary">West</a></li>
            <li><a href="/messages/create?Name=middle" class="link-primary" >Middle</a></li>
            <li><a href="/messages/create?Name=east" class="link-primary">East</a></li>
        </ul>
        <a href="/messages" style="color: green">Show News</a></li>
        
      @yield('content')
    </body>