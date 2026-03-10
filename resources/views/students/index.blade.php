<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Estudiantes</title>
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Estudiantes Registrados</h2>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Añadir Estudiante</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Avatar</th> <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $student->picture) }}" width="60" class="img-thumbnail">
                </td>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->description }}</td>
                <td>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>