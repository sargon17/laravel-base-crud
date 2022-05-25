@extends('layouts.showLayout')

@section('title')
    {{$comic['title']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('series')
    {{$comic['series']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('price')
    {{$comic['price']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('description')
    {{$comic['description']}}
@endsection
{{--------------------------------------------------------------------------}}

{{-- @section('artists')
    @foreach ($comic['artists'] as $artist)
        <span class="artist">{{ $artist }}</span>,
    @endforeach
@endsection --}}
{{--------------------------------------------------------------------------}}

{{-- @section('writers')
    @foreach ($comic['writers'] as $writer)
        <span class="artist">{{ $writer }}</span>,
    @endforeach
@endsection --}}
{{--------------------------------------------------------------------------}}

@section('thumb')
    {{$comic['image']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('sale_date')
    {{$comic['sale_date']}}
@endsection
{{--------------------------------------------------------------------------}}
