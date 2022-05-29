@extends("../layouts/generalLayout")

@section("content")
<div class="main">
    <div class="jumbotron"></div>
    <div class="main-content">
      <div class="current-series" id="currentSeries">
        <div class="main-content-header">
          <h2>Current Series</h2>
        </div>
        <div class="main__cards-list">
            @foreach($comics as $comicIndex => $comic)
             <div class="main__card">
               <a href="/comics/{{$comic['id']}}">
                 <div class="main__card-image">
                   <img src="{{ $comic['image'] }}" alt="">
                 </div>
                 <div class="main__card-content">
                   <h3>{{ $comic['series'] }}</h3>
                 </div>
               </a>
             </div>
            @endforeach
          @yield("content")
        </div>
        <div class="row jc-center">
            <div class="col-3">
                <a href="comics/create">
                    <div class="btn btn-primary">
                        Add new comics
                    </div>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>

  @include("../partials/banner")

@endsection

