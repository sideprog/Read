<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li><img src="images/highlight_yellow.png"></li>
                <li><a href="#about">Surligner</a></li>
                <li><a href="#about">Annoter</a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{set_active('new')}}"><a href="/new">Nouvel article</a></li>
                <li class="{{set_active('articles')}}"><a href="/articles">Liste articles</a></li>
                <li><a href="#about">Déconnexion</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>