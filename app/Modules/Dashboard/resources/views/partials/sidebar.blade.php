<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{!! $user->getAttribute('avatar') !!}" alt="{!! $user->getAttribute('name') !!}">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{!! $user->getAttribute('name') !!}</p>
                        <div>
                            <small class="designation text-muted">Manager</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block">New Project
                    <i class="mdi mdi-plus"></i>
                </button>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['ui-features','buttons'])}}">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['ui-features','typography'])}}">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.page',['forms','basic_elements'])}}">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.page',['charts','chartjs'])}}">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.page',['tables','basic-table'])}}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.page',['icons','font-awesome'])}}">
                <i class="menu-icon mdi mdi-sticker"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-restart"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['samples','blank-page'])}}"> Blank Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['samples','login'])}}"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['samples','register'])}}"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['samples','error-404'])}}"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.page',['samples','error-500'])}}"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
