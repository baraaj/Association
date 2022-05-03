<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard_change_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:56 GMT -->
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
@include('header2')
  <div class="clearfix"></div>
  
  <!-- Dashboard -->
  <div id="dashboard"> 
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
    <div class="utf_dashboard_navigation">
      <div class="utf_dashboard_navigation_inner_block">
        <ul>
            
		 <!-- 
       <li><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>     
       <li><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>	          
		  <li>
			<a href="javascript:void(0)"><i class="sl sl-icon-layers"></i> My Listings</a>
			<ul>
				<li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
				<li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
				<li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
			</ul>				
		  </li>
		  <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>		
        <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>	
        <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Reviews</a>
			<ul>
				<li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
				<li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>					
			</ul>	
		  </li>	
      	  <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
		  <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>                 	!-->  
	
		  
          <li>
			                   		 
		  <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
		  <li class="active"><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
          <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Change Password</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index_1.html">Home</a></li>
               <!-- <li><a href="dashboard.html">Dashboard</a></li> !-->
                <li><a href="/pass">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="sl sl-icon-key"></i> Change Password</h4>
            <div class="utf_dashboard_list_box-static"> 
              <div class="my-profile">
			    <div class="row with-forms">
					<div class="col-md-4">
						<label>Current Password</label>						
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-4">
						<label>New Password</label>						
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-4">
						<label>Confirm New Password</label>
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-12">
						<button class="button btn_center_item margin-top-15">Change Password</button>
					</div>
				</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
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

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard_change_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:56 GMT -->
</html>