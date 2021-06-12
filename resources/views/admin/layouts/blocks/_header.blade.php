<header class="header">
    <div class="logo-container">
        <a href="{{ route('admin.orders.list') }}" class="logo">
            <img src="{{ asset('adm/images/Slogo.svg') }}" height="35" alt="Porto Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ asset('adm/images/!logged-user.jpg') }}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{ asset('adm/images/!logged-user.jpg') }}" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">{{ Auth::user()->role->name }}</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('admin.profile.edit') }}"><i class="fa fa-user"></i> Профиль</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('admin.logout') }}"><i class="fa fa-power-off"></i> Выход</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
