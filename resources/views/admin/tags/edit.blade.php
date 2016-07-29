@extends('admin.template.main')

@section('title','Editar Tag')

@section('content')



    {!! Form::open(['route'=>array('admin.tags.update','id'=>$tag->id),'method'=>'PUT'])!!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$tag->name,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@endsection