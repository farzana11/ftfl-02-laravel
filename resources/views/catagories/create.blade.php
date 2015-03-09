@extends('portfolio.index')
 
@section('content')
    <h2>Create categories:</h2>
 
    {!! Form::model(new App\Catagories, ['route' => ['catagories.store']]) !!}
        @include('catagories/partials/_form', ['submit_text' => 'Create categories'])
    {!! Form::close() !!}
@endsection


