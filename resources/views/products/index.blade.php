<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Productos</title>
</head>
<body>
<div class="container">
    <br>
    <a href="{{route('users.index')}}" class="btn btn-dark">Listado Usuarios</a>
    @role('admin')
    <a href="{{route('products.create')}}" class="btn btn-dark">Registrar nuevo producto</a>
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
                <th>DESCRIPCIÓN</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($products as $product)
                    <th>{{$product->id}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->price}}</th>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            @role('employee')
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-info col-10">Detalles</a>
                            @endrole
                            @role('admin')
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-warning col-10">Editar</a>
                            <button class="btn btn-sm btn-danger col-10" type="submit">Eliminar</button>
                            @endrole
                        </form>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</body>
</html>

