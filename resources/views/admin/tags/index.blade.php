@extends('admin.template.main')

@section('title','Listado de tags')

@section('content')
    <a href="{{route('admin.tags.create')}}" class="btn btn-primary">Registrar Tag</a>



    {!! Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
    <div class="input-group">
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar...','aria-describody'=>'search']) !!}
       <span class="input-group-addon" id="search">
           <span class="glyphicon glyphicon-search"></span></span>
    </div>
    {!! Form::close() !!}

    <table class="table table-striper">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>

        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-warning"><span
                                class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{route('admin.tags.destroy',$tag->id)}}" class="btn btn-danger"
                       onclick="return confirm('Desea eliminar el tag?');"><span
                                class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $tags->render() !!}
    </div>
@endsection