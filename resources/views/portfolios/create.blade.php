@extends('portfolio/index')

@section('content')
    <h2>Create Portfolios for Categories "{{ $catagories->title }}"</h2>

    {!! Form::model(new App\Portfolios, ['route' => ['catagories.portfolios.store', $catagories->title], 'class'=>'']) !!}
        @include('portfolios/partials/_form', ['submit_text' => 'Create Portfolios'])
    {!! Form::close() !!}
@endsection

