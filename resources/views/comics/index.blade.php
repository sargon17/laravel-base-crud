@extends("../layouts/indexLayout")

@section("content")
 @foreach ($comics as $comic)
    <div class="card">
        <div class="card-header">
            <h3>{{ $comic->title }}</h3>
        </div>
        <div class="card-body">
            <p>{{ $comic->description }}</p>
        </div>
    </div>

 @endforeach

@endsection
