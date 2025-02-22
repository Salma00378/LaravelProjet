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
        <div class="d-flex justify-content-between mb-4">
            @if (Route::has('login'))
                <nav class="d-flex gap-2">
                    @auth
                        <!-- <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                            Dashboard
                        </a> -->

                        <!-- Logout Form -->
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-secondary mr-3">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <!-- Cards for Create and List Posts -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Créer un Article</h5>
                        <p class="card-text">Ajoutez un nouvel article en cliquant ici.</p>
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Créer</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des Articles</h5>
                        <p class="card-text">Voir tous les articles créés jusqu'à présent.</p>
                        <a href="{{ route('posts.list') }}" class="btn btn-secondary">Voir les articles</a>
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
