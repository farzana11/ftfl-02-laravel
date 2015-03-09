@extends('portfolio.index')

@section('content')
    <h2>{{ $catagories->title }}</h2>

    @if ( !$catagories->portfolios->count() )
        Your catagories has no portfolio.
    @else
        <ul>
            @foreach( $catagories->portfolios as $portfolios )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.portfolios.destroy', $catagories->title, $portfolios->title))) !!}
                        <a href="{{ route('catagories.portfolios.show', [$catagories->title, $portfolios->title]) }}">{{ $portfolios->title }}</a>
                        (
                            {!! link_to_route('catagories.portfolios.edit', 'Edit', array($catagories->title, $portfolios->title), array('class' => 'btn btn-info')) !!},

                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('catagories.index', 'Back to categories') !!} |
        {!! link_to_route('catagories.portfolios.create', 'Create portfolios', $catagories->title) !!}
    </p>
@endsection