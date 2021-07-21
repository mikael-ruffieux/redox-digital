<div id="services-menu">
    <div class="container">
        <ul>
            @foreach ($services as $service)
            <li><a href="#{{$service->getSlug()}}">{{$service->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>