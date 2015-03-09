@extends('portfolio/index')

@section('content')
    <h2>
        {!! link_to_route('catagories.index', $catagories->title, [$catagories->description]) !!} -


        {{ $portfolios->title }}
    </h2>

    {{ $portfolios->description }}
@endsection