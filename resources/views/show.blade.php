<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir l'article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Contenu:</strong> {{ $post->content }}</p>
                <p><strong>Publié par:</strong> {{ $post->user->name }}</p>
                <p><strong>Date de création:</strong> {{ $post->created_at }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('posts.list') }}" class="btn btn-secondary">Retour à la liste</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
