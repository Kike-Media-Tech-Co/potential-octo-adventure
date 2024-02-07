<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@KikeAfrica">
    <meta name="twitter:creator" content="@KikeAfrica">
    <meta property="og:url" content="https://kikeafrica.co.tz/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://kikeafrica.co.tz/images/image.jpg">
    <meta property="og:image:alt" content="KikeAfrica">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1600">
    <meta property="og:image:height" content="800">
    <meta property="og:locale" content="en">
    <meta property="og:site_name" content="KikeAfrica">
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width">
    <link rel="apple-touch-icon" href="/images/image.jpg" sizes="180x180">
    <link rel="icon" href="/images/Main-logo.png" sizes="32x32" type="image/png">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="description" content="Kike Africa is a pioneering media and technology company at the forefront of civic technology, and serving as a vibrant coding & data hub for young women in Tanzania. We also offer expert consultation services to drive innovation and success.">
    @if ($title)
    <meta property="og:title" content="{{ $title }} | Kike Africa">
    @else
    <meta property="og:title" content="Kike Africa">
    @endif
    <meta property="og:description" content="Kike Africa is a pioneering media and technology company at the forefront of civic technology, and serving as a vibrant coding & data hub for young women in Tanzania. We also offer expert consultation services to drive innovation and success.">
    <link rel="canonical" href="https://kikeafrica.co.tz/">
    <title>Kike Africa</title>
    <link rel="stylesheet" href="/css/style.css">
    @if ($title !== "Home")
        <link rel="stylesheet" href="/css/nothome.css">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="/images/Main-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</head>

<body>
    <div class="logo-div"><a href="/" class="logo"><img src="/images/Kike-White-logo.png" alt=""></a></div>
    <header class="header">
        <div></div>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a class="{{ Route::is('about') ? 'active' : '' }}" href="/about">about</a></li>
                <li><a class="{{ Route::is('services') ? 'active' : '' }}" href="/services">services</a></li>
                <li><a class="{{ Route::is('contact') ? 'active' : '' }}" href="/contact">contact</a></li>
                <li><a class="{{ Route::is('blog') ? 'active' : '' }}" href="#">blog</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="/about">About us</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="/services">Our services</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#">Terms & condition</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#">Blog</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#">Career</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="/contact">Contact</a></li>
                            <!-- <li><i class="ion-ios-arrow-forward"></i> <a href="#faq">FAQ</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact" style="font-size: 1.5rem;">
                        <h4>Contact Us</h4>
                        <p>
                            Kinondoni<br>
                            Tanzania <br>
                            <strong>Phone:</strong> +255 659 000 000<br>
                            <strong>Email:</strong> info@kikeafrica.co.tz<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/" target="_blank"><i class="ion-logo-facebook ion-logo"></i></a>
                            <a href="https://twitter.com/KikeAfrica" target="_blank"><i class="ion-logo-twitter ion-logo"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="ion-logo-linkedin ion-logo"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="ion-logo-instagram ion-logo"></i></a>
                            <a href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><i class="ion-logo-googleplus ion-logo"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Subscription</h4>
                        <p>With Our Skills Put Together, You Get An Ensemble Capable Of Doing Anything And Everything Your Company Needs. Subscribe Here To Get Our Latest Updates.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 copyright" style="color: #fff; font-size: 1.3rem;">
                    Copyright &copy; 2023 Kike Africa. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>
</body>

</html>