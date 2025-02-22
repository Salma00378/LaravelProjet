<style>
    /* Sidebar Styling */
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        padding-top: 20px;
        color: white;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        color: white;
        display: block;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    /* Main content should not overlap with sidebar */
    .content {
        margin-left: 250px; /* Moves content to the right */
        padding: 20px;
    }
</style>


<div class="sidebar">
    <h4 class="text-center">Menu</h4>
    <a href="/">Home</a>
    <a href="{{ route('post.create') }}">Create Post</a>
    <a href="{{ route('posts.list') }}">List Posts</a>

    <hr>
    <form action="{{ route('logout') }}" method="POST" class="mt-3 px-3">
        @csrf
        <button type="submit" class="btn btn-danger btn-block">Logout</button>
    </form>
</div>