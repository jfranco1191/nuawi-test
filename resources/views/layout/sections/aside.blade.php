<style>
    .sidebar {
        height: 100vh;
        background-color: #f8f9fa;
        flex-shrink: 0;
    }
    .sidebar .nav-link.active {
        background-color: #007bff;
        color: white;
    }
</style>
<div class="sidebar col-2">
    <nav class="nav flex-column">

        <a class="nav-link {{ $menuActive == 'USERS' ? 'active' : '' }}" href="{{route('users.list')}}">
            <i class="fas fa-users"></i> Usuarios
        </a>
        <a class="nav-link {{ $menuActive == 'ARTICLES' ? 'active' : '' }}" href="{{route('articles.list')}}">
            <i class="fas fa-newspaper"></i> Articulos
        </a>
    </nav>
</div>
