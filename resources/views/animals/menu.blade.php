<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand absolute" href="{{asset(env('THEME'))}}/index.html">breed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{asset(env('THEME'))}}/index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset(env('THEME'))}}/about.html">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{asset(env('THEME'))}}/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breed</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">German Shepherd</a>
                        <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">Labrador</a>
                        <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">Rottweiler</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset(env('THEME'))}}/blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset(env('THEME'))}}/contact.html">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
