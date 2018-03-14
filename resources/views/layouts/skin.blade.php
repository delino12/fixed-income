<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="/text/css" href="css/isotope.css" media="screen" /> 
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="/css/prettyPhoto.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>        
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navigation">
                <div class="container">                 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="index.html"><h1><span>iB</span>onds</h1></a>
                        </div>
                    </div>
                    
                    <div class="navbar-collapse collapse">                          
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#" class="active">Home</a></li>
                                <li role="presentation"><a href="#">Floating</a></li>
                                <li role="presentation"><a href="#">Pricing (Evaluating)</a></li>
                                <li role="presentation"><a href="#">Discounted</a></li>
                                <li role="presentation"><a href="#">Help us discover</a></li>                     
                            </ul>
                        </div>
                    </div>                      
                </div>
            </div>  
        </nav>      
    </header>
        @yield('contents')
    <footer>
        <div class="footer">
            <div class="container">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>iBonds</h2>
                    <p>In a elit in lorem congue varius. Sed nec arcu.
                    Etiam sit amet augue.
                    Fusce fermen tum neque a rutrum varius odio pede 
                    ullamcorp-er tellus ut dignissim nisi risus non tortor.
                    Aliquam mollis neque.</p>
                    
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                </div>
                
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                    <h3>RECENT POSTS</h3>
                    <ul>
                        <li>Awesome Design with Overviews</li><hr>
                        <li>Great Design with Features </li><hr>
                        <li>Limitless functions & Works </li><hr>
                        <li>Multi is simple and clean design</li>
                    </ul>
                </div>
                
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <h3>CONTACT INFO</h3>
                    <ul>
                        <li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li><hr>
                        <li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li><hr>
                        <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
                    </ul>
                </div>
                
            </div>
        </div>
        
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; {{ date("Y") }} <a target="_blank" href="http://www.cavidel.com/" title="Cavidel">Powered By Cavidel</a>. All Rights Reserved.
                    </div>
                    <div class="col-md-6">
                        <ul class="pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
                </div>
            </div>
        </div>      
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="/js/jquery-2.1.1.min.js"></script>  
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/jquery.isotope.min.js"></script> 
    <script src="/js/functions.js"></script>
    <script>
        wow = new WOW({}).init();
    </script>
    @yield('footer')
  </body>
</html>