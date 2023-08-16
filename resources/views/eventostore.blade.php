<!DOCTYPE html>
<html>
<head>
    <title>Agregar Eventos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>
<body>

    <h1>Lista de Evento</h1>

    <a href="{{ route('eventos.create') }}">Crear Nuevo Evento</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">ticker</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
            <tr>
                <td>{{ $evento->id }}</td>
                <td>{{ $evento->nombre }}</td>
                <td>{{ $evento->numero_ticker }}</td>
                
                <td>
                    <a href="{{ route('eventos.edit', $evento) }}">Editar</a>
                    <a href="{{ route('eventos.destroy', $evento) }}">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>

      <button>hola</button>



</body>
</html>
