<div class="vertical-menu pt-4">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li class="mb-2">
                    <a href="{{ route('dashboard') }}"
                        class="waves-effect {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="bx bx-home"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title" key="t-apps">Modules</li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-users">Users</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('admin.journal.index') }}" class="waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-journals">Journals</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('editorial.member.index') }}" class="waves-effect">
                        <i class="bx bx-group"></i>
                        <span key="t-editorial-board-member">Editorial Board Member</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('admin.volume.index') }}" class="waves-effect">
                        <i class="bx bx-layer"></i>
                        <span key="t-volumes">Volumes</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-bookmark"></i>
                        <span key="t-issues">Issues</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-articles">Articles</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-upload"></i>
                        <span key="t-submissions">Submissions</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-shield"></i>
                        <span key="t-admins">Admins</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-lock"></i>
                        <span key="t-permission">Permission</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-settings">Settings</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
