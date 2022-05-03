     
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