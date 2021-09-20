<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('admin.home')}}">Redox Digital</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('projects.index')}}">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services.index')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">Clients</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('cv-projects.index')}}">CV</a>
                </li>
            </ul>

            <a href="{{route('home')}}" class="btn btn-link">Retour au site</a>

            <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="btn btn-outline-danger my-2 my-sm-0" type="submit" value="Logout">
            </form>
        </div>
    </div>
</nav>