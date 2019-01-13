<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Nikola Miljevic photography</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/includecss/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    {{-- <link href="{{asset('css/includecss/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/includecss/et-line.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/includecss/ionicons.min.css')}}" rel="stylesheet"> --}}
    <!-- Carousel CSS -->
    <link href="{{asset('css/includecss/slick.css')}}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset('css/includecss/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/includecss/animate.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/includecss/main.css')}}" rel="stylesheet">

</head>
<body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
    
    <div class="body-container container-fluid">
        <a class="menu-btn" href="javascript:void(0)">
            <i class="ion ion-grid"></i>
        </a>
        <div class="row justify-content-center">
            <!--=================== side menu ====================-->
            <div class="col-lg-2 col-md-3 col-12 menu_block">
    
                <!--logo -->
                <div class="logo_box">
                    {{-- <a href="#">
                        <img src="assets/img/logo.png" alt="cocoon">
                    </a> --}}
                    <h3 style="color:yellow;">NMPhoto</h3>
                </div>
                <!--logo end-->
    
                <!--main menu -->
                <div class="side_menu_section">
                    <ul class="menu_nav">
                        <li class="active">
                        <a href="{{url('photos')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{url('services')}}">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{url('portfolio')}}">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{url('blog')}}">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <!--main menu end -->
    
         

<!--filter menu  -->


     <div class="side_menu_section">
            <h4 class="side_title">filter by:</h4>
            <ul  id="filtr-container"  class="filter_nav">
            <li  data-filter="*" class="active"><a href="javascript:void(0)" >all</a></li>
             @foreach ($categories as $category)
            <li data-filter=".{{$category}}"><a href="javascript:void(0)">{{$category}}</a></li>
             @endforeach
                
               
            </ul>
    </div>
<!--filter menu end -->
     

                <!--social and copyright -->
                <div class="side_menu_bottom">
                    <div class="side_menu_bottom_inner">
                        <ul class="social_menu">
                            <li>
                                <a href="#"> <i class="ion ion-social-pinterest"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="ion ion-social-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="ion ion-social-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="ion ion-social-dribbble"></i> </a>
                            </li>
                        </ul>
                        <div class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
                <!--social and copyright end -->
    
            </div>
            <!--=================== side menu end====================-->

{{-- =====================================pocetak============================ --}}

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
                <div class="portfolio">
                    <div class="container-fluid">
                        <!--=================== masaonry portfolio start====================-->
                       
                        <div class="grid img-container justify-content-center no-gutters">
                               
                            <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>
                         
                         
                            @foreach($photos as $photo) 
                                <div class="grid-item {{$photo->category->name}}  col-sm-12 col-md-6 col-lg-3">
                                    <a href="{{asset('storage/photos/'.$photo->photo)}}" >
                                        <div class="project_box_one">
                                            <img src="{{asset('storage/photos/'.$photo->photo)}}" alt="pro1" />
                                            <div class="product_info">
                                                <div class="product_info_text">
                                                    <div class="product_info_text_inner">
                                                        <i class="ion ion-plus"></i>
                                                        <h4>{{$photo->title}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach  
                       
       {{-- 
                       
                           <div class="grid-item  branding architecture  col-sm-12 col-md-6">
                               
                                <a href="{{asset('storage/photos/'.$photo->photo)}}" title="project name 2">
                                    <div class="project_box_one">
                                        <img src="{{asset('storage/photos/'.$photo->photo)}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>{{$photo->title}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                              
                                </a>
                              
                            </div>
                            <div class="grid-item  design col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/m1.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/m1.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item  photography design col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/j4.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/j4.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item  branding photography  col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/j3.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/j3.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item  architecture design col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/j2.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/j2.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item  photography architecture col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/j1.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/j1.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item  branding design  col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/2.jpg')}}" title="project name 5">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/2.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-item architecture  col-sm-12 col-md-6 col-lg-3">
                                <a href="{{asset('images/1.jpg')}}" title="project name 4">
                                    <div class="project_box_one">
                                        <img src="{{asset('images/1.jpg')}}" alt="pro1" />
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <div class="product_info_text_inner">
                                                    <i class="ion ion-plus"></i>
                                                    <h4>project name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> 
                           --}} 
                        </div>
    
  
                        <!--=================== masaonry portfolio end====================-->
                    </div>
                      
                </div>
               
            </div>
           
            <!--=================== content body end ====================-->
        </div>
       
    </div>
{{-- =================================kraj======================================================== --}}
<!-- jquery -->
<script src="{{asset('js/includejs/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('js/includejs/popper.js')}}"></script>
<script src="{{asset('js/includejs/bootstrap.min.js')}}"></script>
<script src="{{asset('js/includejs/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script src="{{asset('js/includejs/slick.min.js')}}"></script>
<!--Portfolio Filter-->
<script src="{{asset('js/includejs/imgloaded.js')}}"></script>
<script src="{{asset('js/includejs/isotope.js')}}"></script>
<!-- Magnific-popup -->
<script src="{{asset('js/includejs/jquery.magnific-popup.min.js')}}"></script>
<!--Counter-->
<script src="{{asset('js/includejs/jquery.counterup.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('js/includejs/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('js/includejs/main.js')}}"></script>

</body>
</html>
