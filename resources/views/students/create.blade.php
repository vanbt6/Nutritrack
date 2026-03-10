<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nuevo Estudiante</title>
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-header"><h4>Registrar Nuevo Estudiante</h4></div>
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido:</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Avatar (Imagen):</label>
                    <input type="file" name="picture" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Guardar Estudiante</button>
                <a href="{{ route('student.index') }}" class="btn btn-secondary">Regresar</a>
            </form>
        </div>
    </div>
</body>
</html>