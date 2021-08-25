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
                <br />
                <a href="{{url('users/create')}}" class="btn btn-primary">Crear nuevo usuario</a>
                @if(session('status'))
                <div class="alert alert-success mt-3">
                    {{session('status')}}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>CORREO</th>
                                <th>FECHA DE CREACIÓN</th>
                                <th>FECHA DE ACTUALIZACIÓN</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user -> id}}</td>
                                <td>{{$user -> names}}</td>
                                <td>{{$user -> lastnames}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> created_at}}</td>
                                <td>{{$user -> updated_at}}</td>
                                <td>
                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{$users-> links()}}
            </div>
        </div>
    </div>
</body>

</html>
