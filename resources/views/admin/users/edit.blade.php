@extends('admin.template.main')

@section('title','Editar Usuario '. $user->name)

@section('content')
    {!! Form::open(['route'=>array('admin.users.update','id'=>$user->id),'method'=>'PUT'])!!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$user->name,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',$user->email,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
        {!! Form::button('Volver',['class'=>'btn btn-default','onclick'=>route('admin.users.index')]) !!}

    </div>


    {!! Form::close() !!}
@endsection