<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile/edit*') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Edit My Profile
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ADMINISTRATOR</span>
            </h6>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/dashboard/genres"
                        class="nav-link {{ Request::is('dashboard/genres*') ? 'active' : '' }}">
                        <span data-feather="grid"></span>
                        Post Genres
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/dashboard/users"
                        class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}">
                        <span data-feather="user-plus"></span>
                        Post Users
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/dashboard/postmin"
                        class="nav-link {{ Request::is('dashboard/postmin*') ? 'active' : '' }}">
                        <span data-feather="trello"></span>
                        Post Posts
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/dashboard/comments"
                        class="nav-link {{ Request::is('dashboard/comments*') ? 'active' : '' }}">
                        <span data-feather="twitch"></span>
                        Post Comment
                    </a>
                </li>
            </ul>
        @endcan

    </div>
</nav>
