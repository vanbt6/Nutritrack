<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Nutriólogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h2>Panel de Nutriólogos</h2>
        <a href="{{ route('nutriologos.create') }}" class="btn btn-primary">Añadir Nuevo</a>
    </div>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nutriologos as $n)
            <tr>
                <td>
                    <img src="{{ $n->foto_url ?? 'https://via.placeholder.com/50' }}" alt="Perfil" class="rounded-circle" width="50" height="50">
                </td>
                <td>{{ $n->user->nombre }}</td>
                <td>{{ $n->cedulaProfesional }}</td>
                <td>{{ $n->especialidad }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('nutriologos.edit', $n->usuario_id) }}" class="btn btn-sm btn-warning">Editar</a>
                    
                    <form action="{{ route('nutriologos.destroy', $n->usuario_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>