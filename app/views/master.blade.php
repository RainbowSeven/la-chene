<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ch&#234;ne Networks</title>
        <meta name="description" content="Chene Networks, where we create your world">
        <meta name="Chene Network" content="Chene Networks">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">

        <!-- CSS StyleSheets -->

        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/redmond/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.navobile.css') }}">
        <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>



        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" id="skinCSS" href="{{ asset('css/skins/default.css') }}">
    </head>
    <body style="overflow:hidden">
     @section('content')
        <div id="content" class="pageWrapper">
            <div class="mobile-header-bar mobile-only" style="position:relative;">
                <a href="#" id="show-navigation"><i class="fa fa-bars"></i></a>
            </div>

            <!-- login box start -->
            <div class="login-box">
                <a class="close-login" href="#"><i class="fa fa-times"></i></a>
                {{ Form::open(['method'=>'POST','url'=>'admin/login']) }}
                    <div class="container">
                        <p>Hello our valued visitor, We present you the best web solutions and high quality, Professional designs with a lot of features. just login to your account and enjoy ...</p>
                        <div class="login-controls">
                            <div class="skew-25 input-box left">
                                <input name="email" type="text" class="txt-box skew25" placeholder="User name Or Email" />
                            </div>
                            <div class="skew-25 input-box left">
                                <input name="password" type="password" class="txt-box skew25" placeholder="Password" />
                            </div>
                            <div class="left skew-25 main-bg">
                                <input type="submit" class="btn skew25" value="Login" />
                            </div>
                            <div class="check-box-box">
                                <input name="remember" type="checkbox" class="check-box" /><label>Remember me !</label>
                                <a href="{{url('admin/reminder')}}">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <!-- login box End -->

            <!-- Header Start -->
            <div id="headWrapper" class="clearfix">

                <!-- top bar start -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="cell-6">
                                <ul>
                                    <li>
                                        <a href="mailto:info@chenenetworks.com">
                                            <i class="fa fa-envelope"></i>info@chenenetworks.com
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+2348062417929">
                                            <span>
                                                <i class="fa fa-phone"></i>
                                                Call Us: +234(0)806-241-7929
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell-6 right-bar">
                                <ul class="right">
                                    <li>
                                        <a href="{{ url('profile') }}">
                                            <i class="fa fa-bar-chart-o"></i>Corporate Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="login-btn">
                                            <i class="fa fa-unlock-alt"></i>Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top bar end -->

                <!-- Logo, global navigation menu and search start -->
                <header class="top-head">
                    <div class="container">
                        <div class="row">
                            <div class="logo cell-12">
                                <a href="{{ url('index') }}"></a>
                            </div>
                            <div class="cell-12">

                                <!-- top navigation menu start -->
                                <nav class="top-nav">
                                    <ul>
                                      <li class="{{ HTML::activeState('/') }}">
                                        <a href="{{ url('index') }}">
                                            <i class="fa fa-home"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                      <li class="{{ HTML::activeState('about-us') }}">
                                        <a href="#">
                                            <i class="fa fa-list-alt"></i>
                                            <span>About Us</span>
                                        </a>
                                            <ul>
                                              <li>
                                                <a href="{{ url('about-us') }}">
                                                    <span>Who we are</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('profile') }}">
                                                    <span>Our Corporate Profile</span>
                                                </a>
                                            </li>

                                            </ul>

                                          <li class="{{ HTML::activeState('services')}} {{ HTML::activeState('quote-request')  }}">
                                            <a href="#">
                                                <i class="fa fa-html5"></i>
                                                <span>Services</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('services') }}">What we do</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('request/quote') }}">Quote Request</a>
                                                </li>
                                            </ul>
                                        </li>
                                      <li class="{{ HTML::activeState('projects') }}" >
                                        <a href="{{ url('projects') }}">
                                            <i class="fa fa-cogs"></i>
                                            <span>Projects</span>
                                        </a>
                                    </li>
                                      <li class="{{ HTML::activeState('team') }} {{ HTML::activeState('find-job') }}">
                                        <a href="#">
                                            <i class="fa fa-group"></i>
                                            <span>Our Team</span>
                                        </a>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('team') }}">The Great Team</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('find-job') }}">Find a Job</a>
                                                </li>
                                            </ul>
                                      </li>
                                      <li class="{{ HTML::activeState('cita') }}">
                                        <a href="#">
                                            <i class="fa fa-graduation-cap"></i>
                                            <span>Academy</span>
                                        </a>
                                        <ul>
                                              <li>
                                                <a href="{{ url('cita') }}">Our Training School</a>
                                            </li>
                                            <li>
                                                <a href="#">Students Forum</a>
                                            </li>
                                            <li>
                                                <a href="http://chenenetworks.com/academy/">Login to e-Class</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('apply/cita') }}">Be a Student</a>
                                            </li>
                                        </ul>
                                      </li>

                                      <li class="{{ HTML::activeState('contact') }}">
                                        <a href="{{ url('contact') }}">
                                            <i class="fa fa-phone"></i>
                                            <span>Our Contacts</span>
                                        </a>
                                    </li>
                                </ul>
                               </nav>
                            <!-- top navigation menu end -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Logo, Global navigation menu and search end -->
            </div>
            <!-- Header End -->

            @yield('content')

            @include('facebook-like')

            <!-- Footer start -->
            <footer id="footWrapper">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="clearfix"></div>
                            <hr class="hr-style5">
                            <div class="clearfix"></div>

                            <!-- Newsletters footer cell start -->
                            <div class="cell-3">
                                <p class="no-margin">Keep up on our always evolving product features, Business, Entrepreneurship and ICT updates. Enter your e-mail and subscribe to our newsletter.</p>
                                <form class="NL" data-url="{{ url('newsletter/subscribe') }}">
                                    <div class="skew-25 input-box left">
                                        <input name="subscriber" type="text" class="txt-box skew25" placeholder="Enter Your Email" required>
                                    </div>
                                    <div class="left skew-25 NL-btn">
                                        <input id="newletterBtn" class="btn skew25" type="submit" value="Send" />
                                    </div>
                                </form>
                            </div>
                            <!-- Newsletters footer cell start -->
                             <!-- contact us footer cell start -->
                            <div class="cell-4">
                                <h3 class="block-head">Keep in Touch</h3>
                                <ul>
                                    <li class="footer-contact">
                                        <i class="fa fa-home"></i>
                                        <span>
                                            <a href="{{url('contact')}}#map_canvas">K.M 4, Idi-Iroko Road, Ota, Ogun State, Nigeria.</a>
                                        </span>
                                    </li>
                                     <li class="footer-contact">
                                        <i class="fa fa-envelope"></i>
                                        <span>
                                            <a href="mailto:info@chenenetworks.com">info@chenenetworks.com</a>
                                        </span>
                                    </li>
                                    <li class="footer-contact">
                                        <i class="fa fa-phone"></i>
                                        <span>
                                            <a href="tel:+2348062417929">+234(0)806-241-7929</a>
                                        </span>
                                    </li>
                                    <li class="footer-contact">
                                        <i class="fa fa-fax"></i>
                                        <span>
                                            <a href="tel:+2348091562770">+234(0)809-156-2770</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- contact us footer cell end -->

                            <!-- main menu footer cell start -->
                            <div class="cell-2">
                                <h3 class="block-head">Main Menu</h3>
                                <ul class="footer-menu">
                                    <li><a href="{{ url('index') }}">Home Page</a></li>
                                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                                    <li><a href="{{ url('services') }}">Services</a></li>
                                    <li><a href="{{ url('projects') }}">Projects</a></li>
                                    <li><a href="{{ url('team') }}">Our Team</a></li>
                                    <li><a href="{{ url('cita') }}">Academy</a></li>
                                </ul>
                            </div>
                            <!-- main menu footer cell start -->

                            <!-- Partner footer cell start -->
                            <div class="cell-3 flickr-stream-w">
                                <h3 class="block-head"> Our Partners</h3>
                                <ul>
                                    <li>
                                        <a title="Dell">
                                            <img src="{{ asset('images/partners/dell.jpg') }}" alt="Dell">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="HP">
                                            <img src="{{ asset('images/partners/hp.jpg') }}" alt="HP">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Microsoft">
                                            <img src="{{ asset('images/partners/microsoft.jpg') }}" alt="Microsoft">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Google">
                                            <img src="{{ asset('images/partners/google.jpg') }}" alt="Google">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Intel">
                                            <img src="{{ asset('images/partners/intel.jpg') }}" alt="Intel">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Cisco">
                                            <img src="{{ asset('images/partners/cisco.jpg') }}" alt="Cisco">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="ESET">
                                            <img src="{{ asset('images/partners/eset.jpg') }}" alt="Eset">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="SURE-P">
                                            <img src="{{ asset('images/partners/sure-p.jpg') }}" alt="Sure-P">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Partner footer cell start -->

                            <!-- footer social links right cell start -->
                            <div class="cell-3">
                                <ul class="social-list right">
                                    <li class="skew-25">
                                        <a href="http://www.facebook.com/chenenetworks" data-title="Facebook Page" data-tooltip="true">
                                            <span class="fa fa-facebook skew25"></span>
                                        </a>
                                    </li>
                                    <li class="skew-25">
                                        <a href="http://www.linkedin.com/chenenetworks" data-title="Linkedin Network" data-tooltip="true">
                                            <span class="fa fa-linkedin skew25"></span>
                                        </a>
                                    </li>
                                    <li class="skew-25">
                                        <a href="#" data-title="Skype" data-tooltip="true">
                                            <span class="fa fa-skype skew25"></span>
                                        </a>
                                    </li>
                                    <li class="skew-25">
                                        <a href="http://www.twitter.com/chenenetworks" data-title="Twitter Handle" data-tooltip="true">
                                            <span class="fa fa-twitter skew25"></span>
                                        </a>
                                    </li>
                                    <li class="skew-25">
                                        <a href="#" data-title="Our Blogs" data-tooltip="true">
                                            <span class="fa fa-rss skew25"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- footer social links right cell end -->
                        </div>
                    </div>
                </div>

                <!-- footer bottom bar start -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <!-- footer copyrights left cell -->
                            <div class="copyrights cell-6">&copy; Ch&#234;ne Networks 2015. All rights reserved. <span></div>
                        </div>
                    </div>
                </div>
                <!-- footer bottom bar end -->
            </footer>
            <!-- Footer end -->


           <!-- Back to top Link -->
            <div id="to-top" class="main-bg">
                <span class="fa fa-arrow-circle-up"></span>
            </div>

        </div>
        <!-- Load JS siles -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Waypoints script -->
        <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

        <!-- SLIDER REVOLUTION SCRIPTS  -->
        <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Animate numbers increment -->
        <script type="text/javascript" src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>

        <!-- slick slider carousel -->
        <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

        <!-- Animate numbers increment -->
        <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>

        <!-- PrettyPhoto script -->
        <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>

        <!-- Share post plugin script -->
        <script type="text/javascript" src="{{ asset('js/jquery.sharrre.min.js') }}"></script>

        <!-- Product images zoom plugin -->
        <script type="text/javascript" src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>

        <!-- Jquery UI Autocomplete -->
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>

        <!-- Geo location plugin -->
        <script type="text/javascript" src="{{ asset('js/jeoquery.js') }}"></script>

        <!-- Input placeholder plugin -->
        <script type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.navobile.min.js') }}"></script>

        <!-- general script file -->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
                    <script type="text/javascript">
                    var $_Tawk_API={},$_Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/550819f5059b265f5423ff9a/default';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();
                    </script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            $('#responsive-nav').navobile();
        </script>
    </body>
</html>
