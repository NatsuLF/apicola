<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/posts') }}">Panel de administración</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/user/profile') }}">
                              <i class="fa fa-btn fa-user"></i> Profile
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="{{ url('/logout') }}">
                              <i class="fa fa-btn fa-sign-out"></i> Logout
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
        </div>
    </div>
</nav>
