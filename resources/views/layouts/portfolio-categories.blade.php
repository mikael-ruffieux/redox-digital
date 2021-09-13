<nav id="cat-menu">
    <div class="container">
        <ul>
            @foreach ($services as $service)
            <li><a href="#">{{$service->title}}</a></li>
            @endforeach
        </ul>
        
    </div>
</nav>