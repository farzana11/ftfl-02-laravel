@extends('portfolio.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">


                <div class="panel-body">


<h2> New Category</h2>
    @if ( !$catagories->count() )
        You have no category
    @else
        <ul>
            @foreach( $catagories as $catagory )

                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.destroy', $catagory->title))) !!}
                    <a href="{{ route('catagories.show', $catagory->title) }}">{{ $catagory->title }}</a>
                    (
                    {!! link_to_route('catagories.edit', 'Edit', array($catagory->title), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}


            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('catagories.create', 'Create Category') !!}
    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection