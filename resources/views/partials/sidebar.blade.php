<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="home" ng-class="{ active: isActive('/dashboard')}"><i class="icon-speedometer"></i> Dashboard <span
                            class="badge badge-primary">NEW</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="test" ng-class="{ active: isActive('/test')}"><i class="icon-speedometer"></i> Test</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="user" ng-class="{ active: isActive('/user')}"><i class="icon-people"></i> Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>