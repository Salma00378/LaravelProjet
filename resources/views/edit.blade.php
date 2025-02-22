<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    @include('sidebar')
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <div class="container mt-5">
            <h2>Modifier l'article</h2>

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Contenu de l'article</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required>{{ $post->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Mettre à jour</button>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
