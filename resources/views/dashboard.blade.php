<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:23 GMT -->
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
          <li><a href="/dashboard"><i class="sl sl-icon-layers"></i> لوحة القيادة</a></li>       
		                                		 
		  <li class="active"><a href="/profile"><i class="sl sl-icon-user"></i> الصفحة الشخصية</a></li>
		  <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> تغيير الرقم السري</a></li>
          <li><a href="/"><i class="sl sl-icon-power"></i> خروج</a></li>
        </ul>
      </div>
    </div>
     
	<div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Dashboard</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index_1.html">Home</a></li>
                <li>Dashboard</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="notification success closeable margin-bottom-30">
            <p>You are currently signed in as <strong>Jonathon Cristy</strong> Has Been Approved!</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>
      </div>
      
      <div class="row"> 
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-1">
            <div class="utf_dashboard_stat_content">
              <h4>36</h4>
              <span>Published Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Map2"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-2">
            <div class="utf_dashboard_stat_content">
              <h4>615</h4>
              <span>Pending Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-3">
            <div class="utf_dashboard_stat_content">
              <h4>9128</h4>
              <span>Expired Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Align-JustifyRight"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-4">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>New Feedbacks</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Diploma"></i></div>
          </div>
        </div>
	
		<div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-5">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>Total Views</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Eye-Visible"></i></div>
          </div>
        </div>
		
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-6">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>Total Reviews</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Star"></i></div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-6 col-md-12">
          <div class="utf_dashboard_list_box with-icons margin-top-20">
            <h4>Recent Activities</h4>
            <ul>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>              
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>			  
              <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
			  <li>
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
			  <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
            </ul>
          </div>
		  <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
            <nav class="pagination">
              <ul>
				<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
				<li><a href="#" class="current-page">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
			  </ul>
            </nav>
          </div>
        </div>
		<div class="col-lg-6 col-md-12">
          <div class="utf_dashboard_list_box invoices with-icons margin-top-20">
            <h4>All Order Invoices</h4>
            <ul>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="paid">Paid</span> Premium Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004128641</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="paid">Paid</span> Platinum Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004312641</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="paid">Paid</span> Platinum Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004312641</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="unpaid">Unpaid</span> Basic Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
			  <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="unpaid">Unpaid</span> Basic Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
			  <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong><span class="unpaid">Unpaid</span> Basic Plan</strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2021</li>
                </ul>
                <div class="buttons-to-right"> <a href="dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-lg-12 col-md-12 mb-4">
		  <div class="utf_dashboard_list_box table-responsive recent_booking">
			<h4>Recent Booking</h4>
			<div class="dashboard-list-box table-responsive invoices with-icons">
			  <table class="table table-hover">
				<thead>
				  <tr>
					<th>#</th>
					<th>Image</th>
					<th>Name</th>
					<th>Booking Date</th>
					<th>Payment Type</th>
					<th>Status</th>
					<th>View Booking</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>2</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-2.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Credit Card</td>
					<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>3</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-3.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>4</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>5</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-2.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>6</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-3.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2021</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-canceled text-uppercase">Canceled</span></td>
					<td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				</tbody>
			  </table>
			</div>
		  </div>
		</div>
        <div class="col-md-12">
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

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_rtl/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 17:06:38 GMT -->
</html>