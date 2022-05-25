@extends("../layouts/indexLayout")

@section("content")
           @foreach($comics as $comicIndex => $comic)
            <div class="main__card">
              <a href="/detail/{{$comicIndex}}">
                <div class="main__card-image">
                  <img src="{{ $comic['image'] }}" alt="">
                </div>
                <div class="main__card-content">
                  <h3>{{ $comic['series'] }}</h3>
                </div>
              </a>
            </div>
           @endforeach
@endsection
