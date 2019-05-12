<section id="underheader" class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 topWrap ">
                <div class="usermenu_area">
                    <div class="menuUsItem pull-right">
                        <div class="timetable_area">
                            <span class=""><strong>Mn - St: </strong>8:00am - 9:00pm <strong>Sn: </strong>Closed</span>
                        </div>
                    </div>
                    <div class="menuUsItem pull-left">
                        <div class="contact_area">
                            <i class="icon-cellphone67 icon-rounded"></i>free call<span class="text-separator"></span>0800 123
                            45 678
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 topWrap">
                <div class="logo logo_center">
                    <a class="navbar-brand" href="/">
                        <img class="logo_main" src="/fe/images/logo.png" alt="Dentalux logo">
                        <span class="logo_text">denta<i>lux</i></span>
                    </a>
                </div>
                <div class="bottomWrap">
                    <div class="search" title="Open/close search form">
                        <div class="searchForm">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="text" class="searchField" placeholder="" value="" name="s" title="Search for:">
                                <button type="submit" class="searchSubmit" title="Start search"><span class="icoSearch"></span></button>
                            </form>
                        </div>
                        <div class="ajaxSearchResults"></div>
                    </div>
                    <a href="#" class="openResponsiveMenu icon-menu"></a>
                    <nav id="mainmenu_wrapper" class="menuTopWrap topMenuStyleLine text-center">
                        <ul id="mainmenu" class="nav sf-menu inited ">
                            <li class="menu-item-has-children custom_view_item current-menu-item">
                                <a href="#">Home <span class="caret"></span></a>
                                <!--
                                 <ul class="sub-menu fadeInUp animated">
                                     <li class="menu-item current-menu-item">
                                         <a href="index.html">Homepage</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="home-page-2.html">Home Page 2</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="home-page-3.html">Home Page 3</a>
                                     </li>
                                 </ul>
                                 -->
                            </li>
                            <!--
                            <li class="menu-item-type-custom menu-item-has-children">
                                <a href="#" >Pages <span class="caret"></span></a>
                                <ul class="sub-menu fadeInUp animated">
                                    <li class="menu-item">
                                        <a href="about.html">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shortcodes.html">Shortcodes</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="single-post.html">Single Post</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="404-2.html">404</a>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <li class="menu-item-type-custom">
                                <a href="">Services</a>
                            </li>
                            <!--
                             <li class="menu-item-type-custom menu-item-has-children">
                                 <a href="#">Team <span class="caret"></span></a>
                                 <ul class="sub-menu fadeInUp animated">
                                     <li class="menu-item">
                                         <a href="team.html">Team Members</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="dr-marta-green.html">Dr. Marta Green</a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="menu-item-type-custom">
                                 <a href="gallery.html" class="">Gallery</a>
                             </li>
                             <li class="menu-item-type-custom menu-item-has-children">
                                 <a href="#">Blog <span class="caret"></span></a>
                                 <ul class="sub-menu fadeInUp animated">
                                     <li class="menu-item">
                                         <a href="blog.html">Blog</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="masonry.html">Masonry</a>
                                     </li>
                                 </ul>
                             </li>
                             -->
                            <li class="menu-item-type-custom">
                                <a href="{{ action('PageController@appointment') }}">Appointment</a>
                            </li>

                            @if(Auth::user())
                                <li class="menu-item-type-custom">
                                    <a href="{{ action('Auth\LoginController@logout') }}">Logout</a>
                                </li>
                            @else
                                <li class="menu-item-type-custom">
                                    <a href="{{ action('Auth\LoginController@showFELoginForm') }}">Login</a>
                                </li>
                                <li class="menu-item-type-custom">
                                    <a href="{{ action('Auth\RegisterController@showRegisterForm') }}">Register</a>
                                </li>
                            @endif

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>