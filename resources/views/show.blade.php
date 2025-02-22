<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir l'article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Sidebar Styling */
    .sidebar {
        height: 100%;
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
        margin-left: 250px; /* Adds space equal to sidebar width */
        padding: 20px;
    }

    /* Fix the position of the Logout button */
    .logout-btn {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
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
        <div class="post-details">
            <h2>{{ $post->title }}</h2>
            <div class="post-meta mb-3">
                <span class="text-muted">Publié par: <strong>{{ $post->user->name }}</strong></span><br>
                <span class="text-muted">Date de création: <strong>{{ $post->created_at->format('d/m/Y') }}</strong></span>
            </div>

            <div class="post-content">
                <h4>Contenu de l'article:</h4>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
