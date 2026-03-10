<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nutriólogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Nuevo Registro de Nutriólogo</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('nutriologos.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Correo Electrónico</label>
                        <input type="email" name="correo" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Cédula Profesional</label>
                        <input type="text" name="cedula" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Especialidad</label>
                        <input type="text" name="especialidad" class="form-control" placeholder="Ej. Nutrición Clínica" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>URL de Foto de Perfil</label>
                    <input type="url" name="foto_url" class="form-control" placeholder="https://ejemplo.com/foto.jpg">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Guardar Registro</button>
                    <a href="{{ route('nutriologos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>