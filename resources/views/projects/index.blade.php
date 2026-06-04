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
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-top: 1rem;
        }
        .header-section h1 {
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.8rem;
            margin: 0;
        }
        .btn-new {
            background-color: #3a86ff;
            border: none;
            color: white;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            font-size: 0.95rem;
        }
        .btn-new:hover {
            background-color: #2563eb;
            color: white;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .project-card {
            background: white;
            border: 1px solid #e8eaed;
            border-radius: 8px;
            padding: 1.5rem;
            transition: box-shadow 0.2s, border-color 0.2s;
        }
        .project-card:hover {
            border-color: #d0d7de;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .project-card h3 {
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
        }
        .project-card p {
            color: #57606a;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }
        .project-meta {
            color: #8b949e;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }
        .project-actions {
            display: flex;
            gap: 0.7rem;
        }
        .btn-action {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            border-radius: 6px;
            border: 1px solid;
            background: white;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }
        .btn-edit {
            color: #3a86ff;
            border-color: #d0d7de;
        }
        .btn-edit:hover {
            background-color: #f6f8fa;
            border-color: #3a86ff;
        }
        .btn-delete {
            color: #da3633;
            border-color: #d0d7de;
        }
        .btn-delete:hover {
            background-color: #fff5f5;
            border-color: #da3633;
        }
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            background: white;
            border-radius: 8px;
            border: 1px solid #e8eaed;
        }
        .empty-state h3 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .empty-state p {
            color: #57606a;
            margin: 0;
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
        <div class="header-section">
            <h1>Mis Proyectos</h1>
            <a class="btn btn-new" href="{{ route('projects.create') }}">+ Nuevo</a>
        </div>

        @if($proyectos->count() > 0)
            <div class="projects-grid">
                @foreach($proyectos as $proyecto)
                    <div class="project-card">
                        <h3>{{ $proyecto->nombre }}</h3>
                        <p>{{ Str::limit($proyecto->descripcion, 120) }}</p>
                        <div class="project-meta">
                            {{ $proyecto->fecha_de_creacion}}
                        </div>
                        <div class="project-actions">
                            <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn-action btn-edit">Editar</a>
                            <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este proyecto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-delete">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <h3>Sin proyectos</h3>
                <p>Crea tu primer proyecto para comenzar</p>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>