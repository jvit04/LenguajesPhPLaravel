<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Proyecto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9fafb;
        }
        .container {
            margin-top: 2rem;
        }
        h2 {
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .form-control {
            border: 1px solid #d1d5db;
            border-radius: 6px;
        }
        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-submit {
            background-color: #3b82f6;
            border: 1px solid #3b82f6;
            color: white;
        }
        .btn-submit:hover {
            background-color: #2563eb;
            border-color: #2563eb;
            color: white;
        }
        .btn-cancel {
            background-color: white;
            border: 1px solid #d1d5db;
            color: #374151;
        }
        .btn-cancel:hover {
            background-color: #f3f4f6;
            text-decoration: none;
            color: #374151;
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 600px;">
        <h2>Crear Proyecto</h2>
        
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="5" required></textarea>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('projects.index') }}" class="btn btn-cancel">Cancelar</a>
                <button type="submit" class="btn btn-submit">Crear</button>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>