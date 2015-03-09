@extends('portfolio/index')

@section('content')
    <h2>Edit Portfolios "{{ $portfolios->title }}"</h2>

    {!! Form::model($portfolios, ['method' => 'PATCH', 'route' => ['catagories.portfolios.update', $catagories->title, $portfolios->title]]) !!}
        @include('portfolios/partials/_form', ['submit_text' => 'Edit Portfolios'])
    {!! Form::close() !!}
@endsection