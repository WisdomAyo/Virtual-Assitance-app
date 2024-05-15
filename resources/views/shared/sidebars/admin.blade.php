<div class="sidemenu-body">
    <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
        <li class="nav-item {{Request::segment(3)  === "dashboard" ? "active" : ""}}">

            <a href="{{route('admin.home')}}" class="nav-link">
                <span class="icon"><i class="ri-home-line"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "user" ? "active" : ""}}">
            <a href="{{route('admin.user.mgt')}}" class="nav-link">
                <span class="icon"><i class="ri-user-line"></i></span>
                <span class="menu-title">Artisan Management</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "employer" ? "active" : ""}}">
            <a href="{{route('admin.employer.mgt')}}" class="nav-link">
                <span class="icon"><i class="ri-user-follow-fill"></i></span>
                <span class="menu-title">Employer Management</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(2)  === "jobs" ? "active" : ""}}">
            <a href="{{route('employer.job.index')}}" class="nav-link">
                <span class="icon"><i class="ri-user-follow-fill"></i></span>
                <span class="menu-title">Employer Jobs </span>
            </a>
        </li>


        <li class="nav-item {{Request::segment(4)  === "applicant" ? "active" : ""}}">
            <a href="{{route('admin.user.business.applicant')}}" class="nav-link">
                <span class="icon"><i class="ri-briefcase-2-fill"></i></span>
                <span class="menu-title">All Applicant</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(4)  === "merging" ? "active" : ""}}">
            <a href="{{route('admin.request.merge')}}" class="nav-link">
                <span class="icon"><i class="ri-send-plane-fill"></i></span>
                <span class="menu-title">Requests Assign</span>
            </a>
        </li>



        <li class="nav-item {{Request::segment(4)  === "business" ? "active" : ""}}">
            <a href="{{route('admin.user.business.category')}}" class="nav-link">
                <span class="icon"><i class="ri-file-list-2-fill"></i></span>
                <span class="menu-title">Business Category</span>
            </a>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a href="{{route('admin.user.subscriptions')}}" class="nav-link">--}}
{{--                <span class="icon"><i class="ri-secure-payment-line"></i></span>--}}
{{--                <span class="menu-title">Subscriptions</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <li class="nav-item {{Request::segment(4)  === "locations" ? "active" : ""}}">
            <a href="{{route('admin.user.locations')}}" class="nav-link">
                <span class="icon"><i class="ri-user-location-fill"></i></span>
                <span class="menu-title">Locations</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.user.message')}}" class="nav-link">
                <span class="icon"><i class="ri-chat-1-line"></i></span>
                <span class="menu-title">Messages</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(4)  === "change-password" ? "active" : ""}}">
            <a href="{{route('admin.user.password')}}" class="nav-link">
                <span class="icon"><i class="ri-lock-line"></i></span>
                <span class="menu-title">Change Password</span>
            </a>
        </li>


        <li class="nav-item {{Request::segment(4)  === "photo" ? "active" : ""}}">
            <a href="{{route('admin.profile.photo')}}" class="nav-link">
                <span class="icon"><i class="ri-folder-user-line"></i></span>
                <span class="menu-title">Update Profile Picture</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(4)  === "profile" ? "active" : ""}}">
            <a href="{{route('admin.user.profile')}}" class="nav-link">
                <span class="icon"><i class="ri-user-line"></i></span>
                <span class="menu-title">View Profile</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('account.logout')}}" class="nav-link">
                <span class="icon"><i class="ri-logout-circle-r-line"></i></span>
                <span class="menu-title">Logout</span>
            </a>
        </li>

    </ul>
</div>
