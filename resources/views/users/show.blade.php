<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detalles</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
        <span class="navbar-brand mb-0 h1 "><h2>Detalles Usuario</h2></span>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="bg-light p-5 rounded">
                <table class="table">
                    <hr>
                    <tr>
                        <td><strong>ID</strong></td>
                        <td>{{$users->id}}</td>
                    </tr>
                    <tr>
                        <td><strong>NOMBRE</strong></td>
                        <td>{{$users->name}}</td>
                    </tr>
                    <tr>
                        <td><strong></strong></td>
                        <td>{{$users->email}}</td>
                    </tr>
                    <tr>
                        <td><strong>PASSWORD</strong></td>
                        <td>{{$users->password}}</td>
                    </tr>
                </table>
                <hr>
                <a href="{{url('users')}}" class="btn btn-secondary">Ir al inicio</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

