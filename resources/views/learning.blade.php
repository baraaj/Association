<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/index_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 16:35:24 GMT -->
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:: U-Listing Directory - Listing HTML Template ::</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Style CSS -->
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/mmenu.css">
<link rel="stylesheet" href="css/style.css" id="colors">
<link rel="stylesheet" href="css/stylesheet_rtl.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body class="header-one">

<!-- Preloader Start -->
<div class="preloader">
    <div class="utf-preloader">
        <span></span>
        <span></span>
        <span></span>
		<span></span>		
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper -->
<div id="main_wrapper">
<header id="header_part" class="fullwidth"> 
    <div id="header">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="index_1.html"><img src="images/logo.png" alt=""></a> </div>
          <div class="mmenu-trigger">
			<button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
			</button>
	</div>
@include('header2')
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget"> <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> تسجيل دخول</a>  </div>
        </div>
        
        <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
          <div class="small_dialog_header">
            <h3>تسجيل الدخول</h3>
          </div>
          <div class="utf_signin_form style_one">
            <ul class="utf_tabs_nav">
              <li class=""><a href="#tab1">تسجيل الدخول</a></li>
              <li><a href="#tab2">تسجيل</a></li>
            </ul>
            <div class="tab_container alt"> 
              <div class="tab_content" id="tab1" style="display:none;">
                <form method="post" class="login">
				  <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                      <input type="text" class="input-text" name="Username" id="username" value="" placeholder="الاسم" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password">
                      <input class="input-text" type="password" name="Password" id="password" placeholder="الرقم السري"/>
                    </label>
                  </p>
                  <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="javascript:void(0);">نسيت الرقم السري؟ </a> </span>
                    <div class="checkboxes fl_right">
                      <input id="remember-me" type="checkbox" name="check">
                      <label for="remember-me">تذكرني</label>
                    </div>
                  </div>
                  <div class="utf_row_form">
                    <input type="submit" class="button border margin-top-5" name="login" value="دخول" />
                  </div>
				  <div class="utf-login_with my-3">
					<span class="txt">
            أو تسجيل الدخول باستخدام</span>
				  </div>
				  <div class="row">
					<div class="col-md-6 col-6">
						<a href="javascript:void(0);" class="social_bt facebook_btn mb-0"><i class="fa fa-facebook"></i> Facebook</a>
					</div>
					<div class="col-md-6 col-6">
						<a href="javascript:void(0);" class="social_bt google_btn mb-0"><i class="fa fa-google"></i> Google</a>
					</div>
				  </div>
                </form>
              </div>              
              <div class="tab_content" id="tab2" style="display:none;">
                <form method="post" class="register">
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="username2">
                      <input type="text" class="input-text" name="username" id="username2" value="" placeholder="الاسم" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="email2">
                      <input type="text" class="input-text" name="email" id="email2" value="" placeholder="البريد الالكتروني" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password1">
                      <input class="input-text" type="password" name="password1" id="password1" placeholder="الرقم السري" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password2">
                      <input class="input-text" type="password" name="password2" id="password2" placeholder="تاكيد الرقم السري" />
                    </label>
                  </p>
                  <input type="submit" class="button border fw margin-top-10" name="register" value=" تسجيل "  />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="clearfix"></div>
  <div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2> لجنةالتعليم </h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="/">الرئيسية</a></li>
              <li> لجنةالتعليم  </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container "style="height:250px; text-align:center;   ">
    <div class="row">
      <div class="col-6 col-sm-3 bg-success " style="height:250px;">الوثائق</div>
      <div class="col-6 col-sm-3 bg-success " style="height:250px;">الاخبار</div>
      <div class="col-6 col-sm-3 bg-info  "style="height:250px ; ">الانشطة</div>
      <div class="col-6 col-sm-3 bg-warning "style="height:250px; ">عن اللجنة</div>
    </div>
     
            </div>
         
             
            
         
      
    
           
   
  
  <section class="utf_cta_area_item utf_cta_area2_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block clearfix">                    
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="ادخل بريدك الالكتروني " required="">
                                <button class="utf_theme_btn" type="submit"> سجل</button>
                            </form>
                        </div>
                    </div>
					           <div class="col-md-8 col-sm-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">سجل في بريدنا الالكتروني</h2>
                            <p class="utf_sec_meta">
                              .سجل ليصلك جديدنا
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
  
  <!-- Footer -->
  <div id="footer" class="footer_sticky_part"> 
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>روابط تهمك</h4>
          <ul class="social_footer_link">
            <li><a href="#">الرئيسية</a></li>
            <li><a href="#">مقالات</a></li>
            <li><a href="/contact">اتصل بنا</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>القائمة</h4>
          <ul class="social_footer_link">
            <li><a href="/profile">الصفحة الشخصية</a></li>
            <li><a href="#">الانشطة</a></li>
            <li><a href="#">جديدنا</a></li>
          </ul>
        </div>
      
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4> مساعدة</h4>
          <ul class="social_footer_link">
            <li><a href="#">
              تسجيل الدخول</a></li>
            <li><a href="#">تسجيل</a></li>
             
            <li><a href="#"> اتصل بنا</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 "> 
          <h4> نبذة عنا </h4>
           
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2021 جميع الحقوق محفوظة</div>
        </div>
      </div>
    </div>
  </div>
  <div id="bottom_backto_top"><a href="#"></a></div>
</div>
</div>

<!-- Scripts --> 
<script src="scripts/jquery-3.4.1.min.js"></script> 
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/slick.min.js"></script> 
<script src="scripts/rangeslider.min.js"></script> 
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/jquery-ui.min.js"></script> 
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>

<!-- Style Switcher -->
<div id="color_switcher_preview">
  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="stylesheet"></a></li>
			<li><a href="#" class="stylesheet_1"></a></li>
			<li><a href="#" class="stylesheet_2"></a></li>			
			<li><a href="#" class="stylesheet_3"></a></li>						
			<li><a href="#" class="stylesheet_4"></a></li>
			<li><a href="#" class="stylesheet_5"></a></li>			
		</ul>
	</div>		
</div>
</body>

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/listings_list_with_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 16:45:47 GMT -->
</html>