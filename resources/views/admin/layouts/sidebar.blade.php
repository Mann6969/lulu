<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('admin/index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Matrimonial</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Matrimonial</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/upload_user') }}">
                        <i class="bi bi-circle"></i><span>Upload User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/subscribed') }}">
                        <i class="bi bi-circle"></i><span>Subscribed User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/show_user') }}">
                        <i class="bi bi-circle"></i><span>Show User</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/upload_user') }}">
                <i class="bi bi-person"></i>
                <span>Upload User</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/subscribed') }}">
                <i class="bi bi-question-circle"></i>
                <span>Subscribed User</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/show_user') }} ">
                <i class="bi bi-envelope"></i>
                <span>Show User</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('role.index') }}">
                <i class="bi bi-envelope"></i>
                <span>Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('permission.index') }}">
                <i class="bi bi-envelope"></i>
                <span>Permissions</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('blog.index') }}">
                <i class="bi bi-envelope"></i>
                <span>Blogs</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav-1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Blogs</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav-1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('blog.index') }}">
                        <i class="bi bi-circle"></i><span>Blogs</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ route('blog.create') }}">
                        <i class="bi bi-circle"></i><span>Add Blogs</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{ route('blogcategory.index') }}">
                        <i class="bi bi-circle"></i><span>Blog_Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Admin Users</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bi bi-circle"></i><span>User</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside>
