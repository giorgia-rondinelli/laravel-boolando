@extends('layout.main')

@section('content')

<div><main>
    <div class="contenitore principale">
        @foreach ($cards as $card)


        <div class="card">

            <div class="levi">
              <img src="{{ Vite::asset('resources/img/') . $card['frontImage'] }}" alt="">
              <img  class="seconda-immagine" src="{{Vite::asset('resources/img/'. $card['backImage'])}}" alt="">
              <div class="cuore nero">&#9829;</div>
              <div class=" etichetta sale half" >{{$card['value']}}</div>
              <div class=" etichetta sostenibilità">{{$card['eco']}}</div>
            </div>
            <div class="marca">{{$card['brand']}}</div>
            <div class="descrizione">{{$card['name']}}</div>
            <div>

              <span class="prezzo originale"> {{$card['price']}} &euro;</span>
            </div>
          </div>
        @endforeach










    </div>
  </main>
</div>

@endsection
