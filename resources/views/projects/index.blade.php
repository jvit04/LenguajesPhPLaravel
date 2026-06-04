<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9fafb;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .container {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 1.5rem;
        }
        .btn-nuevo {
            background-color: #3b82f6;
            border: none;
            color: white;
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }
        .btn-nuevo:hover {
            background-color: #2563eb;
            color: white;
        }
        .table {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
        }
        .table thead {
            background-color: #f3f4f6;
            border-bottom: 2px solid #e5e7eb;
        }
        .table th {
            color: #374151;
            font-weight: 600;
            padding: 1rem;
            border: none;
            font-size: 0.95rem;
        }
        .table td {
            padding: 1rem;
            color: #4b5563;
            border: none;
            border-bottom: 1px solid #f0f0f0;
        }
        .table tbody tr:last-child td {
            border-bottom: none;
        }
        .table tbody tr:hover {
            background-color: #f9fafb;
        }
        .btn-editar {
            background-color: #fbbf24;
            border: 1px solid #f59e0b;
            color: #78350f;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 0.5rem;
        }
        .btn-editar:hover {
            background-color: #f59e0b;
            text-decoration: none;
            color: #78350f;
        }
        .btn-delete {
            background-color: #e5e7eb;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-delete:hover {
            background-color: #d1d5db;
            color: #374151;
        }
        .empty-message {
            text-align: center;
            padding: 2rem;
            color: #9ca3af;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Proyectos</h1>
        <a class="btn btn-nuevo" href="{{ route('projects.create') }}">Nuevo</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->descripcion }}</td>
                        <td>{{ $proyecto->fecha_de_creacion }}</td>
                        <td>
                            <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn-editar">Editar</a>
                            <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty-message">No hay proyectos. <a href="{{ route('projects.create') }}">Crea uno nuevo</a></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>