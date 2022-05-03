<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard_my_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:54 GMT -->
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
<link rel="stylesheet" href="css/perfect-scrollbar.css">
<link rel="stylesheet" href="css/style.css" id="colors">
<link rel="stylesheet" href="css/stylesheet_rtl.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body>

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
<header id="header_part" class="fixed fullwidth_block dashboard"> 
    <div id="header" class="not-sticky">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="index_1.html"><img src="images/logo.png" alt=""></a> <a href="index_1.html" class="dashboard-logo"><img src="images/logo2.png" alt=""></a> </div>
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
          <div class="header_widget"> 
			 
            <div class="utf_user_menu">
              <div class="utf_user_name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>مرحبا!</div>
              <ul>
                <li><a href="/dashboard"><i class="sl sl-icon-layers"></i> لوحة القيادة</a></li>
                <li><a href="/profile"><i class="sl sl-icon-user"></i> الصفحة الشخصية</a></li>
				 
                <li><a href="/"><i class="sl sl-icon-power"></i> خروج</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="clearfix"></div>
  
  <!-- Dashboard -->
  <div id="dashboard"> 
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
    <div class="utf_dashboard_navigation">
      <div class="utf_dashboard_navigation_inner_block">
        <ul>
           
		                                		 
		  <li class="active"><a href="/profile"><i class="sl sl-icon-user"></i> الصفحة الشخصية</a></li>
		  <li><a href="/pass"><i class="sl sl-icon-key"></i> تغيير الرقم السري</a></li>
          <li><a href="/"><i class="sl sl-icon-power"></i> خروج</a></li>
        </ul>
      </div>
    </div>
    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>صفحتي الشخصية</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index_1.html">الرئيسية</a></li>
                
                <li>الصفحة الشخصية</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="sl sl-icon-user"></i>  
				تفاصيل الملف الشخصي</h4>
          
              </div>
			 
              <div class="my-profile">
			  <form method="post"  class="up"  action="/modif">
				  @csrf
			    <div class="row with-forms">
					<div class="col-md-4">
						<label>الاسم</label>						
						<input type="text" name="username" class="input-text" placeholder="Alex Daniel" value="">
					</div>
					 
					<div class="col-md-4">
						<label>الهاتف</label>						
						<input type="text" name="phone" class="input-text" placeholder="(123) 123-456" value="">
					</div>
					
					<div class="col-md-4">
						<label>البريد الالكتروني</label>						
						<input type="text" name="email"class="input-text" placeholder="test@example.com" value="">
					</div>
					<div class="col-md-4">
						<label>المهنة</label>						
						<input type="text" name="travail"class="input-text" placeholder="Account Manager" value="">
					</div>
					<div class="col-md-4">
						<label>
							المستوى الفكري</label>						
						<input type="text" name="niv"class="input-text" placeholder="" value="">
					</div>
					<div class="col-md-4">
						<label>تاريخ الولادة</label>						
						<input type="text"  name="date"class="input-text" placeholder="20 March 2000" value="">
					</div>
					<div class="col-md-12">
						<label>العنوان</label>
						<textarea name="address" cols="30" rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
					</div>
					<div class="col-md-4">
						<label>العمر</label>						
						<input type="text"name="age" class="input-text" placeholder="18 Year" value="">
					</div>
					
					
					<div class="col-md-4">
						<label>Facebook</label>						
						<input type="text" class="input-text" placeholder="https://www.facebook.com" value="">
					</div>
					<div class="col-md-4">
						<label>Twitter</label>						
						<input type="text" class="input-text" placeholder="https://www.twitter.com" value="">
					</div>										
					<div class="col-md-4">
						<label>Linkedin</label>
						<input type="text" class="input-text" placeholder="https://www.linkedin.com" value="">						
					</div>
					<div class="col-md-4">
						<label>Google+</label>
						<input type="text" class="input-text" placeholder="https://plus.google.com" value="">						
					</div>
					<div class="col-md-4">
						<label>Instagram</label>
						<input type="text" class="input-text" placeholder="http://instagram.com" value="">						
					</div>
					<div class="col-md-4">
						<label>Skype</label>
						<input type="text" class="input-text" placeholder="https://www.skype.com" value="">						
					</div>
				  </div>	
              </div>
              <button type="submit"class="button preview btn_center_item margin-top-15">سجل</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-12">
		</form>
          <div class="footer_copyright_part">Copyright © 2021 جميع الحقوق محفوظة</div>
        </div>
      </div>
    </div>
  </div>  
</div>

<!-- Scripts --> 
<script src="scripts/jquery-3.4.1.min.js"></script> 
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/perfect-scrollbar.min.js"></script>
<script src="scripts/slick.min.js"></script> 
<script src="scripts/rangeslider.min.js"></script> 
<script src="scripts/bootstrap-select.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/jquery-ui.min.js"></script> 
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>
<script>
(function($) {
try {
	var jscr1 = $('.js-scrollbar');
	if (jscr1[0]) {
		const ps1 = new PerfectScrollbar('.js-scrollbar');

	}
    } catch (error) {
        console.log(error);
    }
})(jQuery);
</script>
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

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard_my_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:56 GMT -->
</html>