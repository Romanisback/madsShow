<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.orders') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.orders.list') }}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>Orders</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.users') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.users.list') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.cases') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.cases.list') }}">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            <span>Cases</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.clients') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.clients.list') }}">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                            <span>Clients</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.bloggers') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.bloggers.list') }}">
                            <i class="fa fa-male" aria-hidden="true"></i>
                            <span>Bloggers</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.reviews') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.reviews.list') }}">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <hr class="separator">
        </div>

    </div>

</aside>
