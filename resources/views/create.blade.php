<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Sidebar -->
    @include('sidebar')
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <div class="container mt-5">
            <h2>Ajouter un article</h2>

            <!-- Formulaire de création d'un article -->
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre" required>
                </div>

                <div class="form-group">
                    <label for="content">Contenu de l'article</label>
                    <textarea class="form-control" id="content" name="content" rows="4" placeholder="Entrez le contenu" required></textarea>
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
