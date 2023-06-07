<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{asset('img/logokecil.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/logokecil.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/dashboard" class="nav-link {{ request()->is('admin/index') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </a>
                </li>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="{{route('akun.show')}}" class="nav-link {{ request()->is('admin/akun') ? 'active' : ''}}">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Account
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('subject.show')}}"
                        class="nav-link {{ request()->is('admin/subject') ? 'active' : ''}}">
                        <i class="nav-icon fa-solid fa-book-open"></i>
                        <p>
                            Subject
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('question.show')}}"
                        class="nav-link {{ request()->is('admin/question') ? 'active' : ''}}">
                        <i class="nav-icon fa-solid fa-question"></i>
                        <p>
                            Question
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('answer.show')}}"
                        class="nav-link {{ request()->is('admin/answer') ? 'active' : ''}}">
                        <i class="nav-icon far fa-message"></i>
                        <p>
                            Answer
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('comment.show')}}"
                        class="nav-link {{ request()->is('admin/comment') ? 'active' : ''}}">
                        <i class="nav-icon far fa-comment"></i>
                        <p>
                            Comment
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('reply.show')}}"
                        class="nav-link {{ request()->is('admin/reply') ? 'active' : ''}}">
                        <i class="nav-icon far fa-comment-dots"></i>
                        <p>
                            Reply
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>