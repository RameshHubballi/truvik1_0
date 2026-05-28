<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--@vite('resources/css/app.css') -->
    @vite('resources/css/style.css')

    <!-- Include Vite assets -->
    <!--@vite(['resources/js/app.js']) -->
    <!--@vite(['resources/js/bootstrap.js']) -->
    <link rel="icon" type="image/png" href="{{ asset('images/cropped-ramesh_site_logo_svg.png') }}">
</head>
<body>
    <nav class="navbar">
       <div class="navbar-left">
        <a href="{{ url('/dashboard') }}" class="logo"><img src="{{ asset('images/cropped-ramesh_site_logo_svg.png') }}" alt="logo"></a>
        <div class="search-box">
            <img src="images/search.png" >
            <input type="text" placeholder="Search for anything">
        </div>    
       </div>
       <div class="navbar-center">
        <ul>
            <li><a href="{{ url('/dashboard') }}" class="{{ (request()->getRequestUri()=='/dashboard')  ? 'active-link' : '' }}"><img src="images/home.png" alt="home"> <span>Home</span></a></li>
            <li><a href="#"><img src="images/jobs.png" alt="jobs"> <span>Jobs</span></a></li>
            <li><a href="#"><img src="images/message.png" alt="message"> <span>Messaging</span></a></li>
            <li><a href="#"><img src="images/notification.png" alt="notification"> <span>Notifications</span></a></li>
            <li><a href="{{ url('/ai') }}" class="{{ (request()->getRequestUri()=='/ai') ? 'active-link' : '' }}"><img src="images/Ai.png" alt="message"> <span>Builder</span></a></li>
        </ul>
       </div>
       <div class="navbar-right">
        <div class="online">
        <img src="images/user-1-1.png" class="nav-profile-img" onclick="toggleMenu()">
        </div> 
       </div>
       <!----Dropdown menu-->
       <div class="profile-menu-wrap" id="profileMenu">
        <div class="profile-menu">
            <div class="user-info">
                <img src="images/user-1.png">
                <div>
                    <h3>{{ Auth::user()->name }}</h3>
                    <a href="#">See your profile</a>
                </div>
            </div>
            <hr>
            <a href="#" class="profile-menu-link">
                <img src="images/feedback.png">
                <p>Give Feedback</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="images/setting.png">
                <p>Settings & Privacy</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="images/help.png">
                <p>Help & Support</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="images/display.png">
                <p>Display & Accessibility</p>
                <span>></span>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="profile-menu-link">
                <img src="{{ asset('images/logout.png') }}">
                <p>
                    @csrf
                    <button type="submit" class="profile-menu-link" style="border: none; background: none; padding: 0; cursor: pointer;">
                        
                        <p style="display: inline;">Logout</p>
                        
                    </button>
                </p>
                <span>></span>
            </form>
            

        </div>
       </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    <script>
        let profileMenu = document.getElementById("profileMenu");

        function toggleMenu(){
            profileMenu.classList.toggle("open-menu");
        }

        let sideActivity = document.getElementById("sidebarActivity");
        let moreLink = document.getElementById("showMoreLink");

        function toggleActivity(){
            sideActivity.classList.toggle("open-activity");
            if (sideActivity.classList.contains("open-activity")) {
                moreLink.innerHTML="Show less <b>-</b>";
                
            }
            else{
                moreLink.innerHTML="Show More <b>+</b>";
            }
        }

    </script>
</body>
</html>