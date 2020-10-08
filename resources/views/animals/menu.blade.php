<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0;">
    <div class="container-fluid" style="background-color: #262626;">
        <a style="margin-left: 16px;" class="navbar-brand absolute" href="{{url('/')}}">breed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                @include(env('THEME') . '.content_menu', ['items' => $menu->roots()])
            </ul>
        </div>
    </div>
</nav>
