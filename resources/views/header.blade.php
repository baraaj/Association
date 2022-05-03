<?php @include('change'); ?>
<header id="header_part" class="fullwidth"> 
    <div id="header">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="index_1.html"><img src="images/lg.png" alt=""> </a> </div>
          <div class="mmenu-trigger">
			<button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
			</button>
		  </div>
    
    <nav id="navigation" class="style_one">
      <ul id="responsive">
        <li><a class="current" href="/">الرئيسية</a>
       
        </li>			  
        
        <li><a href="#">الصفحة الشخصية</a>
          <ul>
    
    <li><a href="/profile">الصفحة الشخصية</a></li>				  
    <li><a href="/pass"> تغيير الرقم السري</a></li>
                  
          </ul>
        </li>
        <li><a href="#">اللجان</a>
          <ul>		
            <li><a href="/learning">لجنة التعلم</a>
              
           
            <li><a href="blog_page.html">لجنة الكفالة</a></li>
            <li><a href="blog_page.html">لجنة المساعدات الاجتماعية</a></li>
             
            </ul>
    
        </li>
        <li><a href="#">صفحات</a>
          <ul>
    <li><a href="page_about.html">عن الجمعية</a></li>
   
    <li><a href="contact.html">تواصل معنا</a></li>
    <li><a href="#">مساعدة</a></li>	
          </ul>
        </li>              
      </ul>
    </nav>
      
     
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
                <form method="post"  class="login"  action="/log">
                  @csrf
				  <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                      <input type="text" class="input-text" name="username" id="username" value="" placeholder="الاسم" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password">
                      <input class="input-text" type="password" name="password" id="password" placeholder="الرقم السري"/>
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
                <form method="post" class="store" action='/create'>
                  @csrf
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                      <input type="text" required class="input-text" name="username" id="username" value="" placeholder="الاسم" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="email">
                      <input type="text" required class="input-text" name="email" id="email" value="" placeholder="البريد الالكتروني" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password">
                      <input class="input-text" required type="password" name="password" id="password" placeholder="الرقم السري" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="cpassword">
                      <input class="input-text" required type="password" name="cpassword" id="cpassword" placeholder="تاكيد الرقم السري" />
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