 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="{{url('post')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}<b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    <li><a href="{{route('post.index')}}"><i class="fa fa-gear fa-fw"></i>Post</a>
                    </li>
                    @if (Auth::check())
                        {{-- expr --}}
                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        @else
                        <li><a href="{{route('login')}}"><i class="fa fa-sign-out fa-fw"></i> Login</a>
                        <li><a href="{{route('register')}}"><i class="fa fa-sign-out fa-fw"></i> Register</a>
                    @endif
                    <li class="divider"></li>                   
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('admin.index')}}" class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle"><i class="fa fa-list  fa-fw" aria-hidden="true"></i> ROLE <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('role.index')}}">Roles List</a>
                                <a href="{{route('user.index')}}">Role User</a>
                                <a href="{{route('post.admin')}}">Manager Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle"><i class="fa fa-folder-open" aria-hidden="true"></i> Manger Post <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a href="{{route('category.index')}}">Category</a>
                            </li>
                             <li>
                               <a href="{{route('tag.index')}}">Tag</a>
                            </li>
                             <li>
                               <a href="{{route('comment.index')}}">Comments Post</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar -->
    </nav>