<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Sidebar Styling */
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #fff;
        color: black;
        padding-top: 30px;
    }

    .sidebar .navbar-brand {
        color: black;
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .sidebar .nav-item {
        margin-bottom: 10px;
    }

    .sidebar .nav-link {
        color: black;
        font-size: 1.1rem;
        padding-left: 20px;
    }

    .sidebar .nav-link:hover {
        background-color: #495057;
    }

    /* Main content should not overlap with sidebar */
    .content {
        margin-left: 250px;
        padding: 20px;
    }
</style>

<body>

<div class="sidebar">
    <div class="text-center mb-4">
        <h4 class="navbar-brand">Blog Menu</h4>
    </div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.create') }}">Ajoute Poste</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.list') }}">Afficher Postes</a>
        </li>
    </ul>

    <hr>

    <form action="{{ route('logout') }}" method="POST" class="px-3">
        @csrf
        <button type="submit" class="btn btn-danger btn-block">Logout</button>
    </form>
</div>


<div class="content">
    <div class="container mt-5">

        
        <!-- Tableau Bootstrap pour afficher les articles -->
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 50) }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                        <td>
                            
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('posts.delete', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-sm">Supprimer</button>
                            </form>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">afficher</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

    <!-- Inclure Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
