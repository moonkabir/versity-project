<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link  @yield('dashboard_menu_active')">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        {{-- Academic section start --}}
        <li class="nav-item @yield('academic_menu_open')">
            <a href="#" class="nav-link  @yield('academic_menu_active')">
                <i class="fas fa-book-open"></i>
                <p>Academic<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.add_syllabus')}}" class="nav-link @yield('add_syllabus_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Syllabus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.manage_syllabus')}}" class="nav-link @yield('manage_syllabus_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage Syllabus</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Academic section End --}}
        {{-- faculty section start --}}
        <li class="nav-item @yield('faculty_menu_open')">
            <a href="#" class="nav-link  @yield('faculty_menu_active')">
                <i class="fas fa-building"></i>
                <p>Faculty<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.add_faculty_member')}}" class="nav-link @yield('add_faculty_member_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.manage_faculty_member')}}" class="nav-link @yield('manage_faculty_member_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage Member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.add_faculty_chairman')}}" class="nav-link @yield('add_faculty_chairman_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Chairman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.manage_faculty_chairman')}}" class="nav-link @yield('manage_faculty_chairman_menu_active')">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage Chairman</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- faculty section End --}}
        {{-- about section start --}}
        <li class="nav-item @yield('about_menu_open')">
            <a href="{{route('admin.about')}}" class="nav-link  @yield('about_menu_active')">
                <i class="fas fa-school"></i></i>
                <p>About</p>
            </a>
        </li>
        {{-- about section End --}}
    </ul>
</nav>