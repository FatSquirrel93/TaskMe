<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard" ng-class="{ active: isActive('/dashboard')}"><i
                            class="icon-speedometer"></i> @{{'DASHBOARD' | translate}} </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> @{{ 'ADMINISTRATION' | translate }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="user" ng-class="{ active: isActive('/admin/user')}"><i
                                    class="icon-people"></i> @{{'USERS' | translate}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user" ng-class="{ active: isActive('/admin/project')}"><i
                                    class="icon-people"></i> @{{'PROJECTS' | translate}}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> @{{ 'PROJECTS' | translate }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item" ng-repeat="project in projects">
                        <a class="nav-link" ng-href="/project/@{{project.id}}" ng-class="{ active: isActive('/project/' + project.id)}"><i
                                    class="icon-people"></i> @{{project.name}}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>