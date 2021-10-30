<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuarios</title>
</head>
<body>
<div class="container">
    <br>
    <a href="{{route('products.index')}}" class="btn btn-dark">Listado Productos</a>
    @role('admin')
    <a href="{{route('users.create')}}" class="btn btn-dark">Registrar nuevo usuario</a>
    @endrole
    @if(session('status'))
        <div class="alert alert-success mt-3">
            {{session('status')}}
        </div>
    @endif
    <hr>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACCIONES</th>
            </tr>
            <tbody>
            <tr>
            @foreach($users as $user)
                <th>{{$user->id}}</th>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>
                <th>{{$user->password}}</th>
                <td>
                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        @role('employee')
                        <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-info col-10">Detalles</a>
                        @endrole
                        @role('admin')
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-warning col-10">Editar</a>
                        <button class="btn btn-sm btn-danger col-10" type="submit">Eliminar</button>
                        @endrole
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
