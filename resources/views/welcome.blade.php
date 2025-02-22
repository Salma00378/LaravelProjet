<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Auth Navigation -->
        <div class="d-flex justify-content-end mb-4">
            @if (Route::has('login'))
                <nav class="d-flex gap-2">
                    @auth
                        <!-- Logout Form -->
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Déconnexion
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info">
                            Connexion
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info">
                                S'inscrire
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <!-- Main Card for Create and List Posts -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center text-primary mb-4">Bienvenue sur le Blog</h5>
                
                <!-- Two buttons for Create and List Posts -->
                <div class="d-flex justify-content-around">
                    <div>
                        <h6 class="card-subtitle mb-2 text-muted">Ajouter un nouvel article</h6>
                        <p class="card-text">Publiez un nouvel article en cliquant ici.</p>
                        <a href="{{ route('post.create') }}" class="btn btn-success btn-block">Créer un Article</a>
                    </div>

                    <div>
                        <h6 class="card-subtitle mb-2 text-muted">Voir tous les articles</h6>
                        <p class="card-text">Consultez tous les articles créés jusqu'à maintenant.</p>
                        <a href="{{ route('posts.list') }}" class="btn btn-warning btn-block">Voir les Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
