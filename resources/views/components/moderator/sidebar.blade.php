<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('moderator-dashboard') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ques Ans</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('moderator-dashboard') }}" class="nav-link @if(Request::is('moderator-dashboard')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(Request::is('unanswered-question') || Request::is('assigned-question')) menu-is-opening menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('unanswered-question') || Request::is('assigned-question')) active @endif">
                        <i class="nav-icon far fa-question-circle"></i>
                        <p>
                            Questions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('unanswered-question') }}" class="nav-link @if(Request::is('unanswered-question')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unanswered Questions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('assigned-question') }}" class="nav-link @if(Request::is('assigned-question')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assigned Questions</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>