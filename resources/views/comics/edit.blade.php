@extends("../layouts/editLayout")


@section('id')

    {{$comic['id']}}
    @endsection

@section('title')
    {{$comic['title'] ?? ''}}
@endsection
{{--------------------------------------------------------------------------}}

@section('series')
    {{$comic['series'] ?? ''}}
@endsection
{{--------------------------------------------------------------------------}}

@section('price')
    {{$comic['price'] ?? '0.00'}}
@endsection
{{--------------------------------------------------------------------------}}

@section('description')
    {{$comic['description'] ?? ''}}
@endsection
{{--------------------------------------------------------------------------}}

@section('image')
    {{$comic['image'] ?? 'https://via.placeholder.com/150'}}
@endsection
{{--------------------------------------------------------------------------}}

@section('sale_date')
    {{$comic['sale_date'] ?? ''}}
@endsection
{{--------------------------------------------------------------------------}}
