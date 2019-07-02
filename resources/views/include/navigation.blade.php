<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#"> Selamat Datang Admin| <b>Jurusan TIK</b></a>
  
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 active" type="submit">Search</button>
          </form>
              <h5>
			        <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				              <span class="fas fa-user-circle btn btn-primary my-2 my-lg-0 active"> {{ Auth::user()->name }}</span>
                   </a>
                     <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                             Logout
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                        </li>
                     </ul>
                 </li>
              @endif
          	  </ul>
              </h5> 
</nav>