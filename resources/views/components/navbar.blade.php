<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Presto the last commit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-between  navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('announcement.index')}}">Annunci</a>
        </li>
        
      </ul>
      <div >
        <div>
          <ul class="navbar-nav">      
            <li class="nav-item dropdown end-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <button class="btn"><i class="bi fs-4 bi-person-circle"></i></button>
              </a>            
              <ul class="dropdown-menu dropdown-menu-end">
                @guest
                <li><a class=" dropdown-item" href="{{route('register')}}">Registrati</a></li>
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                @endguest
                @auth
                <li>
                  <form  method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                  </form>
                </li>
                @endauth
              </li> 
              
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</div>
</nav>