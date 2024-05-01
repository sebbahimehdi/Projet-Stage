
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Barid Maroc</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/GBAM_LOGO_%281%29.png/640px-GBAM_LOGO_%281%29.png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.3.0.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                             
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="1">Français</option>
                                            <option value="2">العربية</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="{{route('Home.home')}}">Home</a></li>
                                <li><a href="{{route('about.about')}}">About Us</a></li>
                                <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                               {{ auth()->user()->nom_complet ?? '' }}  
                               |

                               {{ Auth::guard('admin')->user()->email ?? ''}}

                               |

                               {{ Auth::guard('employe')->user()->email ?? ''}}

                            </div>
                            <ul class="user-login">
                                <li> 
                                </li>
                                <li>
                                   @guest
                                   <a href="{{route('admin.dashbord.login')}}">Sign In</a>
                                   @endguest
                                  
                                   
                                </li>
                                <li>

                                    {{-- @auth --}}
                                    {{-- <a href=" {{route('admin.dashbord.logout')}}">Logout</a> --}}
                                    {{-- @auth --}}
                                    <a href="{{route('logoutClient')}}">Logout</a>
                                    {{-- @endauth --}}
                                   
                                    {{-- <form action="{{route('admin.dashbord.logout')}}" method="post">
                                        @csrf
                                        <button >logout</button>
                                    </form> --}}
                                  
                                    {{-- @endauth --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="index.html">
                            {{-- <img src="assets/images/logo/logo.svg" alt="Logo"> --}}
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/GBAM_LOGO_%281%29.png/640px-GBAM_LOGO_%281%29.png" width="100px" alt="Logo">

                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        {{-- hna kayn nav --}}
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{route('Home.home')}}" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu active collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            
                                            {{-- @auth --}}
                                            {{-- <li class="nav-item"><a href="{{route('Client.create')}}">Inscription Client</a></li> --}}
                                            {{-- <li class="nav-item"><a href="{{route('Commande.create')}}">Inscription Commande</a></li> --}}
                                            {{-- <li class="nav-item"><a href="{{route('Destenataire.create')}}">Inscription Destenataire</a></li> --}}
                                            {{-- @endauth --}}
                                            <li class="nav-item"><a href="{{route('admin.dashbord.registar')}}">Inscription admin </a></li>

                                            <li class="nav-item"><a href="{{route('admin.dashbord.home')}}">Home admin</a></li>
                                            @guest('admin')
                                            <li class="nav-item"><a href="{{route('admin.dashbord.login')}}">login admin</a></li>
                                            
                                            @endguest
                                            
                                            {{-- <li class="nav-item"><a href="{{route('tarife.create')}}">Inscrire Tarifes</a></li> --}}
                                            @auth('admin')
                                            <li class="nav-item"><a href="{{route('assosiation-tarif.create')}}"> Tarifes</a></li>
                                            @endauth
                                            

                                            {{-- <li class="nav-item"><a href="{{route('assosiation-tarif.index')}}"> Tarifes</a></li> --}}
                                            {{-- <li class="nav-item"><a href="{{route('assosiation-tarif.create')}}">assosiation  tarife</a></li> --}}
                                            {{-- <li class="nav-item"><a href="{{route('employe.dashbord.login')}}">login Employe</a></li>  --}}
                                            {{-- <li class="nav-item"><a href="{{route('employe.dashbord.registar')}}">Inscriptio Employe</a></li>  --}}
                                           {{-- <li class="nav-item"><a href="{{route('Pays.create')}}">Inscription Pays Client</a></li> --}}
                                             {{-- <li class="nav-item"><a href="{{route('type_client')}}">Inscription type Client</a></li> --}}
                                             
                                             {{-- <li class="nav-item"><a href="{{route('ville.index')}}">Inscrire ville</a></li>  --}}
                                            {{-- <li class="nav-item"><a href="{{route('pieceEdontite.create')}}">Inscription type_paise_edontite Client</a></li>  --}}
                                            {{-- <li class="nav-item"><a href="{{route('assosiation-client.create')}}">Inscriptio assosiation_Client</a></li>  --}}
                                            <li class="nav-item active">
                                              {{-- @guest
                                              <a href="{{route('loginClient.show')}}">Login Client</a>
                                              @endguest --}}
                                            @auth
                                            <a href="{{route('loginClient.store')}}">Login Employee</a>
                                            @endauth
 
                                            </li>

                                            {{-- <li class="nav-item"><a href="register.html">Register</a></li>
                                            <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.html">404 Error</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('about.about')}}" aria-label="Toggle navigation">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('contact.index')}}" aria-label="Toggle navigation">Contact Us</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <!-- Hotline -->
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Hotline:
                                    <span>(+212) 6 15 85 52 64</span>
                                    <span>(+212) 6 36 05 06 66</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
{{$breadcrumb ?? ''}}

    <!-- End Breadcrumbs -->
    @if (session()->has('success'))
    <div >
        <x-alert>{{session('success')}}</x-alert>
    </div>
    @endif
    @if (session()->has('danger'))
    <div >
        <x-alert-error>{{session('danger')}}</x-alert-error>
    </div>
    @endif
{{$slot}}
    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html">
                                    {{-- <img src="assets/images/logo/white-logo.svg" alt="#"> --}}
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/GBAM_LOGO_%281%29.png/640px-GBAM_LOGO_%281%29.png" width="100px" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Subscribe to our Newsletter
                                    <span>Get all the latest information, Sales and Offers.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: (+212) 6 15 85 52 64 / (+212) 6 36 05 06 66</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">guadiryouness@gmail.com</a>
                                    <a href="mailto:support@shopgrids.com">mehdisbahi@gmail.com</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer our-app">
                                <h3>Our Mobile App</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-apple"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">App Store</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-play-store"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">Google Play</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    <li><a href="javascript:void(0)">FAQs Page</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img src="{{asset('picture/credit-cards-footer.png')}}" alt="#">
                                {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/GBAM_LOGO_%281%29.png/640px-GBAM_LOGO_%281%29.png" width="30px" alt="Logo"> --}}
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Designed and Developed by<a href="#" rel="nofollow"
                                        target="_blank">EL MEHDI SEBBAHI / YOUNNES GUADIR</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>

<!-- Start Main Menu Search -->
                        {{-- <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option selected>All</option>
                                            <option value="1">option 01</option>
                                            <option value="2">option 02</option>
                                            <option value="3">option 03</option>
                                            <option value="4">option 04</option>
                                            <option value="5">option 05</option>
                                        </select>
                                    </div>
                                </div>
                             
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div> --}}
                        <!-- End Main Menu Search -->

                        
                                    {{-- <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                            <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                                    Sibebar</a></li>
                                        </ul>
                                    </li> --}}