<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Nutriólogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Modificar Nutriólogo: {{ $nutriologo->user->nombre }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('nutriologos.update', $nutriologo->usuario_id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $nutriologo->user->nombre }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Cédula Profesional</label>
                        <input type="text" name="cedula" class="form-control" value="{{ $nutriologo->cedulaProfesional }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Especialidad</label>
                        <input type="text" name="especialidad" class="form-control" value="{{ $nutriologo->especialidad }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>URL de Foto de Perfil</label>
                    <input type="url" name="foto_url" class="form-control" value="{{ $nutriologo->foto_url }}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                <a href="{{ route('nutriologos.index') }}" class="btn btn-secondary">Regresar</a>
            </form>
        </div>
    </div>
</body>
</html>