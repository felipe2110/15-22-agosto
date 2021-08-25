<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Usuarios</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="names" value="{{$user->names}}">
                    </div>
                    <div class="form-group">
                        <label for=""> Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" value="{{$user->lastnames}}">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}" >
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar cambios </button>
                        <a href="{{url('users')}}" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
