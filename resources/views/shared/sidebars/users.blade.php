<div class="sidemenu-body">
    <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
        <li class="nav-item {{Request::segment(2)  === "dashboard" ? "active" : ""}}">
            <a href="{{route('user.home')}}" class="nav-link">
                <span class="icon"><i class="ri-home-line"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item {{Request::segment(2)  === "services" ? "active" : ""}}">
            <a href="{{route('user.service')}}" class="nav-link">
                <span class="icon"><i class="ri-briefcase-line"></i></span>
                <span class="menu-title">Services</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(2)  === "jobs" ? "active" : ""}}">
            <a href="{{route('user.job')}}" class="nav-link">
                <span class="icon"><i class="ri-send-plane-fill"></i></span>
                <span class="menu-title">Jobs for you</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "education" ? "active" : ""}}">
            <a href="{{route('user.profile.education')}}" class="nav-link">
                <span class="icon"><i class="ri-briefcase-2-fill"></i></span>
                <span class="menu-title">Education</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "experience" ? "active" : ""}}">
            <a href="{{route('user.profile.experience')}}" class="nav-link">
                <span class="icon"><i class="ri-exchange-box-fill"></i></span>
                <span class="menu-title">Experience</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "awards" ? "active" : ""}}">
            <a href="{{route('user.profile.awards')}}" class="nav-link">
                <span class="icon"><i class="ri-award-fill"></i></span>
                <span class="menu-title">Awards</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "gallery" ? "active" : ""}}">
            <a href="{{route('user.profile.gallery')}}" class="nav-link">
                <span class="icon"><i class="ri-image-2-fill"></i></span>
                <span class="menu-title">Gallery</span>
            </a>
        </li>



        <li class="nav-item">
            <a href="{{route('user.message')}}" class="nav-link">
                <span class="icon"><i class="ri-chat-1-line"></i></span>
                <span class="menu-title">Messages</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "change-password" ? "active" : ""}}">
            <a href="{{route('user.change.password')}}" class="nav-link">
                <span class="icon"><i class="ri-lock-line"></i></span>
                <span class="menu-title">Change Password</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(2)  === "profile" ? "active" : ""}}">
            <a href="{{route('user.profile')}}" class="nav-link">
                <span class="icon"><i class="ri-user-line"></i></span>
                <span class="menu-title">View Profile</span>
            </a>
        </li>

        <li class="nav-item {{Request::segment(3)  === "photo" ? "active" : ""}}">
            <a href="{{route('user.profile.photo')}}" class="nav-link">
                <span class="icon"><i class="ri-user-5-line"></i></span>
                <span class="menu-title">Update profile picture</span>
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
