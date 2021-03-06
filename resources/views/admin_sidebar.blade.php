<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item ">
            <a href="{{route('admin.home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.professor.create')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Add Professor
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.professor.list')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    List Professor
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item ">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </li>
    </ul>
</nav>