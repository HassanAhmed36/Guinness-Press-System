<aside class="app-sidebar">
    <div class="app-sidebar__logo " style="border-bottom: none !important;">
        <a class="header-brand" href="index.html">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" class="header-brand-img desktop-lgo"
                style="width: 150px" alt="Dayonelogo">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" class="header-brand-img dark-logo"
                style="width: 150px" alt="Dayonelogo">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" class="header-brand-img mobile-logo"
                style="width: 150px" alt="Dayonelogo">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" class="header-brand-img darkmobile-logo"
                style="width: 150px" alt="Dayonelogo">
        </a>
    </div>
    <div class="app-sidebar3 " style="overflow: scroll">
        <div class="app-sidebar__user border-none">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ asset('admin_assets/images/users/16.jpg') }}" alt="user-img"
                        class="avatar-xxl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-3">{{ Auth::user()->name ?? '' }}</h5>
                    <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->role->name ?? '' }}</span>
                </div>
            </div>
        </div>
        @if (Auth::user()->role_id == 1)
            <ul class="side-menu">
                <li class="side-item side-item-category mt-4">Dashboards</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                        <i class="feather feather-home sidemenu_icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="side-item side-item-category">Apps</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.user.index') }}">
                        <i class="feather feather-user sidemenu_icon"></i>
                        <span class="side-menu__label">Users</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.journal.index') }}">
                        <i class="feather feather-book-open sidemenu_icon"></i>
                        <span class="side-menu__label">Journals</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('editorial.member.index') }}">
                        <i class="feather feather-users sidemenu_icon"></i>
                        <span class="side-menu__label">Editorial Board Member</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.volume.index') }}">
                        <i class="feather feather-book sidemenu_icon"></i>
                        <span class="side-menu__label">Volumes</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.issue.index') }}">
                        <i class="feather feather-grid sidemenu_icon"></i>
                        <span class="side-menu__label">Issues</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.article.index') }}">
                        <i class="feather feather-file-text sidemenu_icon"></i>
                        <span class="side-menu__label">Articles</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.submission.index') }}">
                        <i class="feather feather-upload sidemenu_icon"></i>
                        <span class="side-menu__label">Submissions</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('doi.index') }}">
                        <i class="feather feather-file-text sidemenu_icon"></i>
                        <span class="side-menu__label">DOI Generator</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('index.body.index') }}">
                        <i class="feather feather-list sidemenu_icon"></i>
                        <span class="side-menu__label">Indexing Bodies</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.blog.index') }}">
                        <i class="feather feather-book sidemenu_icon"></i>
                        <span class="side-menu__label">Blogs</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.news.letter') }}">
                        <i class="feather feather-mail sidemenu_icon"></i>
                        <span class="side-menu__label">News Letters</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.leads') }}">
                        <i class="feather feather-user-plus sidemenu_icon"></i>
                        <span class="side-menu__label">Leads</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.meta.data') }}">
                        <i class="feather feather-list sidemenu_icon"></i>
                        <span class="side-menu__label">Meta Data</span>
                    </a>
                </li>
            </ul>
        @elseif(Auth::user()->role_id == 2)
            <ul class="side-menu">
                <li class="side-item side-item-category mt-4">Dashboards</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('board.member.dashboard') }}">
                        <i class="feather feather-home sidemenu_icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="side-item side-item-category">Apps</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('assign.peer.review') }}">
                        <i class="feather feather-user sidemenu_icon"></i>
                        <span class="side-menu__label">Peer Review Submissions</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</aside>
