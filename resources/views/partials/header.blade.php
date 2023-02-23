<header>
    <div class="container-fluid  bg-personalizzato">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-row-reverse my-2">
                    <div class="mx-5">
                        <span class="text-light"><strong>ADDITIONAL DC SITES</strong></span>
                    </div>
                    <div >
                        <span class="text-light fw-bold">DC POWER<sup><i class="fa-solid fa-trademark"></i> </sup>VISA<i class="fa-regular fa-registered"></i></span>
                    </div>
        
                </div>
            </div>
    
        </div>

    </div>
    <div class="container">

        <div class='row my-5 d-flex align-items-center justify-content-between'>
            <div class='col-1'>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt='logo'>
            </div>
            <div class='col-9'>
                <ul class='list-unstyled d-flex ' >
                    <li>
                        <a class="nav-link {{Route::currentRouteName()== 'home' ? 'active' : ''}}" href="{{route('home')}}" >HOME</a> 
                    </li>
                    <li>
                       <a class="nav-link {{Route::currentRouteName()== 'caracters' ? 'active' : ''}}" href="{{route('caracters')}}" >CHARACTERS</a> 
                    </li>
                    <li>
                        <a class="nav-link {{Route::currentRouteName()== 'comics' ? 'active' : ''}}" href="{{route('comics')}}" >COMICS</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'movies' ? 'active' : ''}}" href="{{route('movies')}}" >MOVIES</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'tv' ? 'active' : ''}}" href="{{route('tv')}}" >TV</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'games' ? 'active' : ''}}" href="{{route('games')}}" >GAMES</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}"> COLLECTIBLES</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'videos' ? 'active' : ''}}" href="{{route('videos')}}" >VIDEOS</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'fans' ? 'active' : ''}}" href="{{route('fans')}}" >FANS</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'news' ? 'active' : ''}}" href="{{route('news')}}" >NEWS</a> 
                     </li>
                     <li>
                        <a class="nav-link {{Route::currentRouteName()== 'shop' ? 'active' : ''}}" href="{{route('shop')}}" >SHOP</a> 
                     </li>
                </ul>
            </div>
            <div class='col-2 position-relative'>
                <input type="search" placeholder="Search" class="input-personale">
                <span><i class="fa-solid fa-magnifying-glass lente"></i></span>
            </div>
    
        </div>
    </div>
    
</header>