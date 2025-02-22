<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
     .content {
        margin-left: 250px; /* To ensure the content doesn't overlap with the sidebar */
        padding-top: 40px;
    }

    .container {
        background-color: whitesmoke;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #495057; /* Darker color for the header */
        font-weight: 600;
        margin-bottom: 30px;
    }

    .form-control {
        border-radius: 4px;
        border: 1px solid #ced4da;
        padding: 15px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 600;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    label {
        font-weight: 500;
        color: #6c757d;
    }

    .form-group {
        margin-bottom: 25px;
    }


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
        <h2>Créer un Nouvel Article</h2>

        <!-- Formulaire de création d'un article -->
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre de l'Article</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Entrez un titre" required>
            </div>

            <div class="form-group">
                <label for="content">Contenu de l'Article</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Entrez le contenu" required></textarea>
            </div>

            <!-- Masquer le champ user_id (ou remplir automatiquement selon l'utilisateur connecté) -->
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>
</div>

    <!-- Inclure Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
