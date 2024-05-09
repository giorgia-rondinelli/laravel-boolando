<header>
    <div class="fisso">
      <div class="contenitore intestazione">
        <nav>
          <ul>
            @foreach ($menu as $item )


            <li><a href="" >{{ $item['name'] }}</a></li>
            @endforeach
          </ul>
        </nav>
        <div class="logo"><img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt=""></div>
        <div  class="icone" >
          <ul>

            <li><a href="" ><i class="fa-regular fa-user"></i></a></li>
            <li><a href="" ><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="" ><i class="fa-solid fa-bag-shopping"></i></a></li>

          </ul>




        </div>
      </div>
    </div>
  </header>
