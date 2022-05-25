<div class="main">
    <div class="jumbotron"></div>
    <div class="main-content">
      <div class="current-series" id="currentSeries">
        <div class="main-content-header">
          <h2>Current Series</h2>
        </div>
        <div class="main__cards-list">
          {{-- @foreach($comics as $comicIndex => $comic)
            <div class="main__card">
              <a href="/detail/{{$comicIndex}}">
                <div class="main__card-image">
                  <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="main__card-content">
                  <h3>{{ $comic['series'] }}</h3>
                </div>
              </a>
            </div>
          @endforeach --}}
          @yield("content")
        </div>
        <div class="main-content__btn-wrapper">
          <button>Load More</button>
        </div>
      </div>
    </div>
  </div>
