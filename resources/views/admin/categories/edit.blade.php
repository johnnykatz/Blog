@extends('admin.template.main')

@section('title','Editar Categoria')

@section('content')



    {!! Form::open(['route'=>array('admin.categories.update','id'=>$category->id),'method'=>'PUT'])!!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$category->name,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@endsection