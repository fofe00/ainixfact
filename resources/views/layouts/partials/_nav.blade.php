<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ route('home1') }}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('galery') }}">Galery</a></li>
            <li class="1"><a href="{{ route('contact') }}">Contact </a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>