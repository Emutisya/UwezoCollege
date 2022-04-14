<div>
    {{-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="#"><img width="60" height="60" class="ml-2" src="{{ asset('images/mic_icon_only.png') }}"
    alt="" /></a>
</div>
<div id="mobile-menu-wrap"></div>
<div class="offcanvas__widget"></div>
<button class="m-nav-btn-inline mr-2">
    <a href="">Sign In</a>
    <span>&rarr;</span>
</button>
</div> --}}

<header class="header header-normal" style="background-color:#6b3f98;" data-setbg="img/little-header.jpg">
    <div class="row">
        <marquee direction="left">
            <a href="https://elearning.uwezocollege.ac.ke/" target="_blank">
                <b style="font-size=20px; color: #FF0000; font-weight:bold; "> Click To Access E-learning</b>
            </a>
        </marquee>

    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-1">
                <div class="header__logo">
                    <img src="images/logo2.png" id="logo" height="" />
                </div>
            </div>
            <div class="col-lg-11 my-auto">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="{{ Request::is('') ? 'active' : '' }}">
                            <a href="">Schools</a>
                            <ul class="dropdown">
                                <li>
                                    <a class="dropdown-item" style="color:purple"
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-ict/">School
                                        of ICT</a>
                                </li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-business-management/"
                                        style="color:purple">School of Business Management</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-electrical-engineering/"
                                        style="color:purple">School of Electrical Engineering</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-catering-and-hospitality/"
                                        style="color:purple">School of Catering and Hospitality</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-social-and-community-development/"
                                        style="color:purple">School of Social & Community Development</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-plumbing/"
                                        style="color:purple">School of Plumbing</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-building-and-construction/"
                                        style="color:purple">School of Building & Construction</a>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-cosmetology/"
                                        style="color:purple">School of Cosmetology</a></li>

                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-accounting/"
                                        style="color:purple">School of Accounting</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-education/"
                                        style="color:purple">School of Education</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-welding/"
                                        style="color:purple">School of Welding</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-counselling/"
                                        style="color:purple">School of Counselling</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-culture-and-social-studies/"
                                        style="color:purple">School of Culture & Social Studies</a></li>
                                <li> <a class="dropdown-item" style=text-align:left;color:purple
                                        href="https://elearning.uwezocollege.ac.ke/programs/schools/school-of-fashion-and-design/"
                                        style="color:purple">School of Fashion & Design</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('courses') ? 'active' : '' }}">
                            <a href="{{route('courses')}}">Courses</a>
                        </li>
                        <li class="">
                            <a href="https://elearning.uwezocollege.ac.ke/" target="_blank">Elearning</a></li>
                        <li class="">
                            <a href="http://uwezowetufoundation.org/" target="_blank">Scholarship</a>
                        </li>
                        <li class="">
                            <a href="http://blog.uwezocollege.ac.ke/">Blog</a>
                        </li>
                        <li class="">
                            <a href="http://resources.uwezocollege.ac.ke" target="_blank">Ecommerce</a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}">
                            <a href="{{route('contact')}}" target="_blank">Contact Us</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

</div>
