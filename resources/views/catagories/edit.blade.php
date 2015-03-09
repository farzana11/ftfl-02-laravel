@extends('portfolio.index')

@section('content')
    <h2>Edit Categories</h2>

    {!! Form::model($catagories, ['method' => 'PATCH', 'route' => ['catagories.update', $catagories->title]]) !!}
        @include('catagories/partials/_form', ['submit_text' => 'Edit Categories'])
    {!! Form::close() !!}
@endsection


