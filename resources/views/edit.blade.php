<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
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
        <h2 class="text-center text-primary mb-4">Modifier l'article</h2>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="font-weight-bold text-secondary">Titre de l'article</label>
                <input type="text" class="form-control border-primary" id="title" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="content" class="font-weight-bold text-secondary">Contenu de l'article</label>
                <textarea class="form-control border-primary" id="content" name="content" rows="6" required>{{ $post->content }}</textarea>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-success">Modifier</button>
            </div>
        </form>
    </div>
</div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
