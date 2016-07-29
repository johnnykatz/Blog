@extends('admin.template.main')

@section('title','Listado de categorias')

@section('content')
    <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Registrar Categoria</a>
    <table class="table table-striper">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>

        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning"><span
                                class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{route('admin.categories.destroy',$category->id)}}" class="btn btn-danger"
                       onclick="return confirm('Desea eliminar la categoria?');"><span
                                class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $categories->render() !!}
    </div>
@endsection