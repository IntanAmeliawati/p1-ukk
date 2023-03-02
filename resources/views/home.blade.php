<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Webpage Title</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="{{ asset('cedo/web/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('cedo/web/css/fontawesome-all.css') }}" rel="stylesheet">
        <link href="{{ asset('cedo/web/css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('cedo/web/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('cedo/web/css/styles.css') }}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('cedo/web/images/favico.png') }}">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container">
                
                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Name</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ route('login.proses') }}">Login <span class="sr-only">(current)</span></a>
                        </li>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->


        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Aplikasi Pembayaran Spp</h1>
                            <p class="p-large"></p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of div -->
                    <div class="col-lg-6">
                            </div>
                        </form>     
                        <!-- end of get quote form -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
            <div class="image-container">
                <img class="img-fluid" src="{{ asset('cedo/web/images/header.svg') }}" alt="alternative">
            </div> <!-- end of image-container -->
            <svg class="frame-decoration" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 282.476"><defs><style>.cls-1{fill:#7f2778;}</style></defs><title>frame-decorative</title><path class="cls-1" d="M0,34.134S305.408-64.19,689.732,72.915c223.7,79.8,438.268,102.561,598.78,46.341C1439.19,66.481,1684.854,39.793,1920,123.939V282.476H0V34.134Z"/></svg>
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Approval -->
        <div class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading"></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled li-space-lg first">
                            <li class="media">
                                <div class="circle">1</div>
                                <div class="media-body">
                                    <h5>Consec Tetur Libero Id Faucibus Nisl</h5>
                                    <p>Duis ut diam quam nulla porttitor massa. Molestie a iaculis at erat lorem ipsum pellentesque adipiscing commodo elit</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="circle">2</div>
                                <div class="media-body">
                                    <h5>Habitasse Platea Dictumst Vestibulum</h5>
                                    <p>Nam aliquam sem et tortor consequat id porta nibh veneatis sed viverra tellus in hac habitasse platea dorum nem</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled li-space-lg second">
                            <li class="media">
                                <div class="circle">3</div>
                                <div class="media-body">
                                    <h5>Est Pellent Esque Ut Morbi Tincidunt</h5>
                                    <p>Nunc sed augue lacus viverra vitae congue. Donec massa sapien faucibus et molestie ac feugiat sed lectus sorata</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="circle">4</div>
                                <div class="media-body">
                                    <h5>Augue Interdum Amet Nulla Facilisi</h5>
                                    <p>Quisque egestas diam in arcu. Amet volutpat consequat mauris nunc congue. Aenean vel elit scelerisque limo nera</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of approval -->

        <!-- Scripts -->
        <script src="{{ asset('cedo/web/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{ asset('cedo/web/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
        <script src="{{ asset('cedo/web/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{ asset('cedo/web/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ asset('cedo/web/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
        <script src="{{ asset('cedo/web/js/scripts.js') }}"></script> <!-- Custom scripts -->
    </body>
</html>