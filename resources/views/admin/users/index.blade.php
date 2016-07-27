@extends('admin.template.main')

@section('title','Listado de usuarios')

@section('content')
    <a href="{{route('admin.users.create')}}" class="btn btn-primary">Registrar Usuario</a>
    <table class="table table-striper">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Mail</th>
        <th>Tipo</th>
        <th>Acciones</th>

        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->type=="admin")
                        <span class="label label-danger"> {{ $user->type }}</span>
                    @else
                        <span class="label label-primary"> {{ $user->type }}</span>
                    @endif

                </td>
                <td>
                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{route('admin.users.destroy',$user->id)}}" class="btn btn-danger" onclick="return confirm('Desea eliminar el usuario?');"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}
@endsection