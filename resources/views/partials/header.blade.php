<header>
    <header>
        <div class="container">
            <div class="row justify-content-center justify-content-evenly mt-4">
                <div class="col-2">
                    <img src="{{ Vite::asset ('resources/img/dc-logo.png')}}" alt="DC logo">
                </div>
                <div class="col-8">
                    <nav class="navbar navbar-expand-lg mt-1">
                        <div class="container-fluid">
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('pages.home')}}">HOME</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link my-active" href="{{ route('comics.index')}}">COMICS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">MOVIES</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">TV</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">GAMES</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">COLLECTIBLES</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">VIDEO</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">FANS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">NEWS</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  SHOP
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
                <div class="col-2">
                    <input type="search" id="mySearch" name="mySearch" placeholder="Search &#128269 " class="border border-0 mt-3">
                </div>
            </div>
        </div>
        
    </header>
    
    
    
    
    
    
    
    
    
    
    {{-- 
    <a class="navbar-brand" href="#">CHARACTERS</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button> --}}
</header>