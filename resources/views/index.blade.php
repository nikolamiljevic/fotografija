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
                        <li class="active"  >
                        <a href="{{url('photos')}}">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">
                                O meni
                            </a>
                        </li>
                        <li>
                            <a href="{{url('services')}}">
                                Usluge
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{url('blog')}}">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                               Kontakt
                            </a>
                        </li>
                    </ul>
                    <div class="ig" style="padding-left:47px">
                        <a href="https://www.instagram.com/iksi_lucius/" target="_blank">
                        <img src="{{asset('images/instagram.png')}}" alt="services icon" style="height:30px"></a>
                    </div>

                </div>
            <!--main menu end -->

            <!--filter menu  -->
                <div class="side_menu_section">
                        <h4 class="side_title">Filtriraj</h4>
                        <ul  id="filtr-container"  class="filter_nav">
                        <li  data-filter="*" class="active"><a href="javascript:void(0)" >Sve</a></li>

                        @foreach ($categories as $category)
                        
                    @if($category =='urbana' || $category =='portreti' || $category =='street' || ($category =='hrana'))
                        <li data-filter=".{{$category}}"><a href="javascript:void(0)">{{$category}}</a></li>
                    @endif
                        @endforeach
                            
                        
                        </ul>
                    </div> {{--  side menu section end --}}
                
            <!--filter menu end -->
     

                <!--social and copyright -->
                <div class="side_menu_bottom">
                    <div class="side_menu_bottom_inner">
              
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



        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center" style="background-color:#18181c;">
            <div class="portfolio">
                <div class="container-fluid">
                            <!--=================== masaonry portfolio start====================-->
                        
                    <div class="grid img-container justify-content-center no-gutters">   
                                                    <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>
                        @foreach($photos as $photo) 
                            {{-- @if($photo->category->name =='urbana' || $photo->category->name=='portreti' || $photo->category->name=='street' || ($category =='hrana'))
                             --}}
                             @if($photo->category->name =='other')
                             @else
                                <div class="grid-item {{$photo->category->name}}  col-sm-12 col-md-6 col-lg-3">
                                    <a href="{{asset('storage/photos/'.$photo->photo)}}" >
                                            <div class="project_box_one">
                                                    <img src="{{asset('storage/photos/'.$photo->photo)}}" alt="pro1" />
                                                <div class="product_info">
                                                    <div class="product_info_text">
                                                        <div class="product_info_text_inner">
                                                            <i class="ion ion-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                               
                            @endif
                        @endforeach  
                    </div>
                            <!--=================== masaonry portfolio end====================-->
                </div>     
            </div> 
        </div>            {{--  col lg 10 kraj ovde su slike --}}
           
            <!--=================== content body end ====================-->
        </div>

    </div>



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
