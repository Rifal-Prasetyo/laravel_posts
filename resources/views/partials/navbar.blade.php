<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">WPU Blog </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'blog') ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto" >
        @auth
          <li class="nav-item dropdown ms-auto">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dashboard">My Dashboard</a>
              <div class="dropdown-divider"></div>

              <form action="/logout" method="POST">
                @csrf
                <button class="dropdown-item" type="submit"> Log Out</button>
              </form>


            </div>
          </li>
          
        @endauth

        @guest
          <li class="nav-item "> 

            <a href="/login" class="nav-link {{ ($active === 'categories') ? 'active' : '' }}">Login

            </a>
          </li>
        @endguest
          
        
        
      </ul>

        
        

        


      </div>
    </div>
  </nav>
    