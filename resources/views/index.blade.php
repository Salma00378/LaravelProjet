<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
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
            <h2>Liste des Articles</h2>
            
            <!-- Tableau Bootstrap pour afficher les articles -->
            <table class="table table-bordered">
                <thead>
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
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('posts.delete', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination: Customizing to remove icons -->
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    @if ($posts->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Précédent</span></li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $posts->previousPageUrl() }}" rel="prev">Précédent</a>
                        </li>
                    @endif

                    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($posts->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $posts->nextPageUrl() }}" rel="next">Suivant</a>
                        </li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Suivant</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
