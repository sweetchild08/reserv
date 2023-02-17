
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Santorenz Bay Resort</title>
    <meta content="" name="description">
    <meta content="rooms" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon.ico')}}" />
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- ========== STYLESHEETS ========== --> 
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/revolution/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/famfamfam-flags.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="{{asset('assets/fonts/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts/flaticon.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect3">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        
        <!-- ========== HEADER ========== -->
        <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand light" href="index.html">
                        <img src="{{asset('assets/images/sbrlogo.png')}}" height="100" alt="Logo">
                    </a>
                    <a class="navbar-brand dark nodisplay" href="index.html">
                        <img src="{{asset('assets/images/sbrlogo.png')}}" height="32" alt="Logo">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        <li style="margin-top:2px"><a href="{{url('home')}}">HOME</a></li>
                        
                        <li style="margin-top:2px"><a href="{{url('about-us')}}">ABOUT US</a></li>
                        <li style="margin-top:2px"><a href="{{url('contact-us')}}">CONTACT US</a></li>
                        <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOMMODATIONS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('services/rooms')}}">ROOMS</a></li>
                                <li><a href="{{url('services/cottage')}}">COTTAGE</a></li>
                                <li><a href="{{url('services/foods')}}">FOODS</a></li>
                                <li><a href="{{url('services/activities')}}">ACTIVITIES</a></li>
                                <li><a href="{{url('services/events')}}">EVENTS</a></li>
                            </ul>
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @if(Session::has('customer_id'))
                                    <li><a href="{{url('accounts/my-reservation')}}">My Reservation</a></li>
                                    <li><a href="{{url('santorenz-reservation/terms-agreement')}}">Book this Resort</a></li>
                                    <li><a href="{{url('accounts/profile')}}">Profile</a></li>
                                    <li><a href="{{url('accounts/change-password')}}">Change Password</a></li>
                                    <li><a href="{{url('accounts/logout')}}">Logout</a></li>
                                @else
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
             
         <!-- ========== REVOLUTION SLIDER ========== -->
         <div class="rev_slider_wrapper fullscreen-container">
            <div id="fullscreen_hero_video" class="rev_slider fullscreenbanner gradient_slider" style="display:none">
                <ul>

                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('assets/images/slider/video_fullscreen.jpg')}}" 
                             alt="Image" 
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" 
                             data-bgparallax="3" 
                             class="rev-slidebg" 
                             data-no-retina>
                        <!-- VIDEO -->
                        <div class="rs-background-video-layer" 
                            data-forcerewind="on" 
                            data-volume="mute" 
                            data-videomp4="{{asset('assets/videos/SANTORENZ.mp4')}}"
                            data-videoattributes="title=0&amp;byline=0&amp;portrait=0&amp;api=1" 
                            data-videowidth="100%" 
                            data-videoheight="100%" 
                            data-videocontrols="none" 
                            data-videostartat="00:00" 
                            data-videoendat="" 
                            data-videoloop="loop" 
                            data-forceCover="1" 
                            data-aspectratio="4:3" 
                            data-autoplay="true" 
                            data-autoplayonlyfirsttime="false" 
                            data-nextslideatend="true">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" 
                             data-x="['center','center','center','center']" 
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" 
                             data-voffset="['0','0','0','0']" 
                             data-width="full" 
                             data-height="full" 
                             data-whitespace="nowrap" 
                             data-transform_idle="o:1;" 
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:500;s:500;" 
                             data-start="0" 
                             data-basealign="slide"
                             data-responsive_offset="off" 
                             data-responsive="off" 
                             style="z-index: 7;border-color:rgba(0, 0, 0, 0);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="middle" 
                             data-voffset="" 
                             data-fontsize="['60','50','40','30']" 
                             data-lineheight="['100','90','70','60']"
                             data-whitespace="nowrap"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 99; color: #fff; font-weight: 900;">SANTORENZ BAY RESORT
                        </div>
                      
                        <!-- LAYER NR. 4 -->
                        <a class="tp-caption button btn_yellow" 
                          href="{{url('services/rooms')}}"
                          data-x="center" 
                          data-hoffset=""
                          data-y="middle"
                          data-voffset="120"
                          data-fontsize="14"
                          data-responsive_offset="on" 
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11; "><i class="fa fa-calendar"></i>BOOK YOUR ACCOMMODATIONS NOW
                        </a>  
                        

                    </li>
                </ul>
            </div>
        </div>

        <!-- ========== BOOKING FORM ========== -->
        <div class="hbf_3">
            <div class="container">
                <div class="inner">
                    <form method="POST" action="{{url('services/search/result')}}">
                        @csrf
                        <input type="hidden" name="days" id="days">
                        <div class="row justify-content-center">
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="type" class="form-control" title="Room Type" data-header="Room Type" required>
                                            <option value="{{Crypt::encryptString('All')}}">All</option>
                                            @foreach($categories as $cat) 
                                            <option value="{{Crypt::encryptString($cat->id)}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 md_p5">
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control md_noborder_right" name="dates" autocomplete="off" placeholder="Date Range" required id="datepicker">
                                    </div>
                                </div>
                            </div>

                        
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="adults" class="form-control md_noborder_right" required>
                                            @for($i=1;$i<=9;$i++)
                                            <option value="{{$i}}">{{$i}} Adult/s</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="childrens" class="form-control md_noborder_right" required>
                                            @for($i=0;$i<=4;$i++)
                                            <option value="{{$i}}">{{$i}} Child/ren</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 md_pl5">
                                <button type="submit" class="button btn-sm btn_blue btn_full">BOOK A ROOM</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- ========== ROOMS ========== -->
        <section class="white_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR FAVORITE ROOMS</h2>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    @foreach($rooms as $key => $value)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">₱{{number_format($value->rate,2)}} <span>/ night</span></div>
                                <a class="hover_effect h_blue h_link" href="{{url('rooms')}}/{{Crypt::encryptString($value->id)}}/details">
                                    <img src="{{asset('assets/images/rooms/'.$value->image)}}" style="height:230px" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="{{url('rooms')}}/{{Crypt::encryptString($value->id)}}/details">{{$value->title}}</a></h4>
                                    <span class="f_right"><a href="{{url('rooms')}}/{{Crypt::encryptString($value->id)}}/details" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{url('services/rooms')}}">VIEW ALL</a>
                </div>
            </div>
        </section>

        <section class="lightgrey_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR FAVORITE COTTAGES</h2>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    @foreach($cottages as $key => $value)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">₱{{number_format($value->rate,2)}} <span>/ night</span></div>
                                <a class="hover_effect h_blue h_link" href="{{url('cottages')}}/{{Crypt::encryptString($value->id)}}/details">
                                    <img src="{{asset('assets/images/cottages/'.$value->image)}}" style="height:230px" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="{{url('cottage')}}/{{Crypt::encryptString($value->id)}}/details">{{$value->title}}</a></h4>
                                    <span class="f_right"><a href="{{url('cottages')}}/{{Crypt::encryptString($value->id)}}/details" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{url('services/cottage')}}">VIEW ALL</a>
                </div>
            </div>
        </section>

        <section class="white_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR EXCLUSIVE FOODS</h2>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    @foreach($foods as $key => $value)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">₱{{number_format($value->rate,2)}} <span></span></div>
                                <a class="hover_effect h_blue h_link" href="{{url('foods')}}/{{Crypt::encryptString($value->id)}}/details">
                                    <img src="{{asset('assets/images/foods/'.$value->image)}}" style="height:230px" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="{{url('foods')}}/{{Crypt::encryptString($value->id)}}/details">{{$value->title}}</a></h4>
                                    <span class="f_right"><a href="{{url('foods')}}/{{Crypt::encryptString($value->id)}}/details" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{url('services/foods')}}">VIEW ALL</a>
                </div>
            </div>
        </section>



        <section class="lightgrey_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR FAVORITE EVENTS</h2>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    @foreach($events as $key => $value)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">₱{{number_format($value->rate,2)}} <span></span></div>
                                <a class="hover_effect h_blue h_link" href="{{url('events')}}/{{Crypt::encryptString($value->id)}}/details">
                                    <img src="{{asset('assets/images/events/'.$value->image)}}" style="height:230px" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="{{url('events')}}/{{Crypt::encryptString($value->id)}}/details">{{$value->title}}</a></h4>
                                    <span class="f_right"><a href="{{url('events')}}/{{Crypt::encryptString($value->id)}}/details" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{url('services/events')}}">VIEW ALL</a>
                </div>
            </div>
        </section>

        <section class="white_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR FAVORITE ACTIVITIES</h2>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    @foreach($activities as $key => $value)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">₱{{number_format($value->rate,2)}} <span></span></div>
                                <a class="hover_effect h_blue h_link" href="{{url('activities')}}/{{Crypt::encryptString($value->id)}}/details">
                                    <img src="{{asset('assets/images/activities/'.$value->image)}}" style="height:230px" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="{{url('activities')}}/{{Crypt::encryptString($value->id)}}/details">{{$value->title}}</a></h4>
                                    <span class="f_right"><a href="{{url('activities')}}/{{Crypt::encryptString($value->id)}}/details" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{url('services/activities')}}">VIEW ALL</a>
                </div>
            </div>
        </section>


        <!-- ========== FEATURES ========== -->
        <section class="lightgrey_bg" id="features">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>OUR AWESOME SERVICES</h2>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                        <div data-slider-id="features" id="features_slider" class="owl-carousel">
                            <div><img src="{{asset('assets/images/foods/1food.jpg')}}" class="img-responsive" alt="Image"></div>
                            <div><img src="{{asset('assets/images/rooms/11room.jpg')}}" class="img-responsive" alt="Image"></div>
                            <div><img src="{{asset('assets/images/conference/11.jpg')}}" class="img-responsive" alt="Image"></div>
                            <div><img src="{{asset('assets/images/activities/swim1.jpg')}}" class="img-responsive" alt="Image"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="owl-thumbs" data-slider-id="features">
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-food"></i></span>
                                <div class="media-body">
                                    <h5>Foods</h5>
                                    <p>Dining out options may have changed, but we still want you to enjoy your favorites foods, even in the comfort of your own home. </p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-person"></i></span>
                                <div class="media-body">
                                    <h5>Rooms</h5>
                                    <p>Safety and comfort are key factors in leisure stays these days. We assure you of medical-grade stringent sanitation procedures in preparing our rooms for guests so you can stay with us with peace of mind.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-business"></i></span>
                                <div class="media-body">
                                    <h5>Conference Hall</h5>
                                    <p>Intimate gatherings are the norm, and we can still help you plan. We have options for any type of exclusive gathering and the requirements you need that adhere to the health protocols.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-beach"></i></span>
                                <div class="media-body">
                                    <h5>Activities</h5>
                                    <p>Summer is finally emerging and many lodging operators are getting ready to reserve activities like kayaking and sight seeing along with accommodation. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== GALLERY ========== -->
        <section id="gallery_style_2" class="white_bg">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>RESORT GALLERY</h2>
                </div>
                <div class="row">
                    <div class="image-gallery">
                        <!-- ITEM -->
                        @for($i=1;$i<=1;$i++)
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/1.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/1.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/2.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/2.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/3.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/3.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/4.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/4.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/5.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/5.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/6.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/6.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/7.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/7.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/9.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/9.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/10.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/10.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/11.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/11.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/12.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/12.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <figure class="gs2_item">
                                <a href="{{asset('assets/images/gallery/register.jpg')}}" class="hover_effect h_lightbox h_white">
                                    <img src="{{asset('assets/images/gallery/register.jpg')}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

       <!-- ========== VIDEO ========== -->
       <section id="video">
            <div class="inner gradient_overlay">
                <div class="container">
                    <div class="video_popup">
                        <a class="popup-vimeo" href="<?php echo e(asset('assets/videos/Santorenz.mp4')); ?>"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ========== CONTACT ========== -->
        <section class="white_bg" id="contact">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2 class="c_title">LOCATION - CONTACT US</h2>
                </div> 
                    <p class="main_description a_center">For booking information, reservations or any other queries, you can reach out to us directly, connect with us on social media, email account and phone numbers provided or complete the form below and we’ll get back to you as soon as possible.</p>
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1656900680066!6m8!1m7!1s4-BOCBDN1bNa-Z0JGs1Acw!2m2!1d13.41275124555449!2d121.2149509617135!3f88.98756801561493!4f-4.3777691631250235!5f0.5141482003440235" width="580" height="395" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="contact-items">
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <h6>Parang, Calapan City, Oriental Mindoro</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <h6>+63 928 7066 065 <br> +63 916 4070 935</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="fa fa-envelope"></i>
                                        <h6>santorenzbayresort2022@gmail.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" name="contact-form">
                            <div id="contact-result"></div>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                            </div>
                            <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.html"><img class="logo" src="{{asset('assets/images/sbrlogo.png')}}" height="32" alt="Logo"></a>
                                <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Hotel one of bests in its kind.Try our different accommodations, awesome services and friendly staff while you are here.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Latest News</h5>
                            <ul class="blog_posts">
                                <li><a href="blog-post.html">Live your myth in Oriental Mindoro</a></li>
                                <li><a href="blog-post.html">Santorenz Bay Resort in pictures</a></li>
                                <li><a href="blog-post.html">Santorenz Bay Resort family party</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Useful Links</h5>
                            <ul class="useful_links">
                                <li><a href="about-us">About us</a></li>
                                <li><a href="contact-us">Contact us</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="https://www.google.com/maps/place/Santorenz+Bay+Resort+and+Hotel/@13.4126818,121.2149639,3a,75y,106.47h,75t/data=!3m6!1e1!3m4!1sGLgFCGZTg43wqG78s3Tqrw!2e0!7i16384!8i8192!4m14!1m6!3m5!1s0x33bce97fc20d0efb:0x85fc49b31d1cf22e!2sSantorenz+Bay+Resort+and+Hotel!8m2!3d13.4128006!4d121.2149636!3m6!1s0x33bce97fc20d0efb:0x85fc49b31d1cf22e!8m2!3d13.4128006!4d121.2149636!14m1!1BCgIgARICCAI">Location</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Contact Us</h5>
                            <address>
								<ul class="address_details">
									<li><i class="glyphicon glyphicon-map-marker"></i> Parang, Calapan City, Oriental Mindoro</li>
									<li><i class="glyphicon glyphicon-phone-alt"></i> Phone: +63 928 7066 065 <br> +63 916 4070 935</li>
									<li><i class="fa fa-envelope"></i> Email: <a href="mailto:info@site.com">santorenzbayresort2022@gmail.com</a></li>
								</ul>
							</address>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                 Copyright 2022 <a href="index.html">Santorenz Bay Resort</a> All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="https://www.facebook.com/Santorenz-Bay-Resort-826458264364965" data-original-title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>
    
    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    
    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>

    <!-- ========== JAVASCRIPT ========== -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.smoothState.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/morphext.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.thumbs.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jPushMenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            $('#datepicker').keypress(function(event) {
                event.preventDefault();
                return false;
            });
        });

        var date = new Date();
        date.setDate(date.getDate() + 5)
        $('input[name="dates"]').daterangepicker({
            "autoApply": true,
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            },
            minDate: date,
        }).on('apply.daterangepicker', function (ev, picker) {
            debugger
            var start = moment(picker.startDate.format('YYYY-MM-DD'));
            var end = moment(picker.endDate.format('YYYY-MM-DD'));
            var diff = start.diff(end, 'days'); // returns correct number
            var day = Math.abs(diff);
            var days = day == 0 ? 1 : day + 1;
            // var rate = '5000' * days;
            $('#days').val(days)
            // $('#rate').html(numberWithCommas(rate.toFixed(2)))
        });

        $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107393832215416");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

//   (function(d, s, id) {
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) return;
//     js = d.createElement(s); js.id = id;
//     js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
</script>