<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="height: 35px;" src="https://www.monteirolobato.edu.br/public/assets/admin/images/avatars/avatar1_big.png" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">
                @if(isset(Auth::guard('admin')->user()->name))

                    {{Auth::guard('admin')->user()->name}}
                @endif
            </p>
            <p class="app-sidebar__user-designation"></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('admins.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Admins</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('show.admins')}}"><i class="icon fa fa-circle-o"></i> Show Admins</a></li>
                <li><a class="treeview-item" href="{{route('create.admins')}}"><i class="icon fa fa-circle-o"></i> Add New Admins</a></li>

            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Jobs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('latest.jobs')}}"><i class="icon fa fa-circle-o"></i> Latest Jobs</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Categories</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('create.cats.admins')}}"><i class="icon fa fa-circle-o"></i> Create Categories</a></li>
                <li><a class="treeview-item" href="{{route('show.cats.admins')}}"><i class="icon fa fa-circle-o"></i> Show Categories</a></li>

            </ul>
        </li>
    </ul>
</aside>
