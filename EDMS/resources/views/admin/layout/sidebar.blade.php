<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">
                <img src="{{ asset('uploads/jald_logo.png') }}" alt="" class="img-fluid sidebar-logo">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i><span>Project</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> All Project</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Completed Project</a></li>
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Ongoing Project</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Employee</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>All Employee</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Add Employee</a></li>
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Regular Employee</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Probationary Employee</a></li>
                </ul>
            </li>

            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Employee Type</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Regular Employee</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Probationary Employee</a></li>
                </ul>
            </li> --}}

            <li class="">
                <a class="nav-link has-dropdown" href="">
                    <i class="fas fa-bullhorn"></i> <span>Department</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Department List</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Add Department</a></li>
                </ul>
            </li>

            <li class="">
                <a class="nav-link has-dropdown" href="">
                    <i class="fas fa-industry"></i> <span>Site</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> All Site</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Add Site</a></li>
                </ul>
            </li>

            <li class="">
                <a class="nav-link" href="">
                    <i class="fas fa-info"></i> <span>Company Information</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>