<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proyecto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f7fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #2c3e50;
        }
        .navbar {
            background-color: white;
            border-bottom: 1px solid #e8eaed;
        }
        .navbar-brand {
            font-weight: 600;
            color: #2c3e50 !important;
            font-size: 1.2rem;
        }
        .form-container {
            background: white;
            border: 1px solid #e8eaed;
            border-radius: 8px;
            padding: 2rem;
            max-width: 500px;
            margin: 2rem auto;
        }
        .form-container h2 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .form-label {
            color: #2c3e50;
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        .form-control {
            border: 1px solid #d0d7de;
            border-radius: 6px;
            padding: 0.6rem 0.8rem;
            font-size: 0.95rem;
            background-color: #f6f8fa;
        }
        .form-control:focus {
            border-color: #3a86ff;
            background-color: white;
            box-shadow: none;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-group-form {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-group-form a, .btn-group-form button {
            flex: 1;
            padding: 0.6rem 1rem;
            font-weight: 500;
            border-radius: 6px;
            border: 1px solid #d0d7de;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-submit {
            background-color: #3a86ff;
            color: white;
            border-color: #3a86ff;
        }
        .btn-submit:hover {
            background-color: #2563eb;
            border-color: #2563eb;
            color: white;
        }
        .btn-cancel {
            background-color: white;
            color: #2c3e50;
        }
        .btn-cancel:hover {
            background-color: #f6f8fa;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <span class="navbar-brand">Proyectos</span>
        </div>
    </nav>

    <div class="container">
        <div class="form-container">
            <h2>Editar Proyecto</h2>
            
            <form action="{{route('projects.update',$proyecto->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $proyecto->nombre }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ $proyecto->descripcion }}</textarea>
                </div>

                <div class="btn-group-form">
                    <a href="{{ route('projects.index') }}" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>