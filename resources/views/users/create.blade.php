<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registrar</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
        <span class="navbar-brand mb-0 h1"><h2>Registrar Usuario</h2></span>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""><strong>ID</strong></label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label for=""><strong>Nombre</strong></label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for=""><strong>Password</strong></label>
                    <input type="text" class="form-control" name="password">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-success">Registrar nuevo usuario</button>
                    <a href="{{url('users')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

