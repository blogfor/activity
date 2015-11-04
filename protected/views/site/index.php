<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<script src="<?php echo $baseUrl;?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $baseUrl;?>/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/validationEngine.jquery.css" type="text/css"/>


<div id="page" class="hfeed site">
    <!-- Header -->
    <header id="masthead" class="site-header">
                 
        <div class="header_top">
          <div class="container">
             <div class="row">
              <div class="col-sm-6 phone_number">
                <div class="phone_icon"> <i class="fa fa-phone-square"></i> </div>
                <h5>1230000236 / 2569874123 </h5>
              </div>
              <div class="col-sm-6 log_re">
                
                <?php if(isset($_SESSION['user_name'])) 
                    ///USER LOGEDIN
                    {
                    echo '<a class="btn btn-transparent login" href="#" hidefocus="true" style="border:0 !important;" >';
                    echo "<span> Hi ".$_SESSION['user_name']."</span>"; 
                    echo '</a>';
                    ?>    
                    <a class="btn btn-transparent regestration" href="#" hidefocus="true"  onclick="site_logout();" style="outline: medium none;">
                      <span>Logout</span>
                    </a>
                    <?php        
                }
                else{
                ?>
                <a class="btn btn-transparent login" href="#" hidefocus="true" data-toggle="modal" data-target="#mylogin" style="outline: medium none;">
                  <span>Login</span>
                </a>
                <a class="btn btn-transparent regestration" href="#" hidefocus="true" data-toggle="modal" data-target="#myregistration" style="outline: medium none;">
                  <span>Registration</span>
                </a>  
                <?php } ?>                    
                
              </div>
             </div>
          </div>   
        </div>
        
        
        <!--LOGIN MODAL BOX-->
        <div id="mylogin" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                   
                  <div class="row msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                <div class="panel panel-default">
                <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                      <form name="login_form" id="login_form" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input name="user_name" id="user_name" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="User Name" type="text">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="user_password" id="user_password" style="outline: medium none;" value="" hidefocus="true" class="form-control" id="exampleInputEmail1" placeholder="Password" type="password">
                      </div>                    
                          <button type="button" class="btn btn-default payment-buttam" onclick="script:site_login();" style="background-color: rgb(221, 221, 221); padding: 5px 10px;">Submit</button>
                    </form>
                  </div>
                </div>
                </div>
            </div>
<!--              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>
          </div>
        </div>
        
        
        
        <!--REGISTRATION MODAL BOX-->
        <div id="myregistration" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                <h4 class="modal-title">Registration</h4>
              </div>
              <div class="modal-body">
                
                <div class="panel panel-default">

                <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                      
                    <form method="post" name="reg-form" id="reg-form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input name="user_name" style="outline: medium none;" value="" hidefocus="true" class="form-control" id="exampleInputEmail1" placeholder="User Name" type="text">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="user_email" style="outline: medium none;" value="" hidefocus="true" class="form-control" id="exampleInputEmail1" placeholder="Password" type="password">
                      </div>                    
                      <button type="button" class="btn btn-default payment-buttam" style="background-color: rgb(221, 221, 221); padding: 5px 10px;" onclick="site_registration();">Submit</button>
                    </form>
                      
                  </div>
                </div>
                </div>
                </div>

            </div>
          </div>
        </div>        
        
        
        
        
        
         
        <!-- Menu Button -->
        <span id="menu-call" class="tficon-menu invisible"></span>
        <!--/ Menu Button -->

        <!-- Logo & Menu -->
        <div class="header invisible">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-logo"><a href="index.html"><img src="<?php echo $baseUrl; ?>/images/Logo1.png" alt="Activety"></a></div>

                        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                            <ul class="nav-menu clearfix">
                                <li class="active"><a href="#"><span>HOME</span></a></li>
                                <li><a href="#"><span>USER INFO</span></a></li>
                                <li><a href="#"><span>Registration </span></a></li>
                                <li><a href="#"><span>Subscription</span></a></li>
                                <li>
                                    <a href="#">Activity</a>
                                    <ul>
                                        <li><a href="#"><span>Services</span></a></li>
                                        <li><a href="#"><span>Services</span></a></li>
                                        <li><a href="#"><span>Services</span></a></li>
                                        <li><a href="#"><span>Services</span></a></li>
                                        <li><a href="#"><span>Services</span></a></li>
                                        <li>
                                            <a href="#">Services</a>
                                            <ul>
                                                <li><a href="#"><span>Services</span></a></li>
                                                <li><a href="#"><span>Services</span></a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a href="blog.html"><span>Location</span></a></li>
                                <li><a href="contact.html"><span>Booking </span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Logo & Menu -->
    </header>
    <!--/ Header -->

    <!-- Main -->
    <div id="main" class="site-main" role="main">

        <!-- Page Titles & Slider or image -->
        <section class="main-row main-row-slim">
            <div class="main-header">
                <!-- Loading Spinner -->
                <div id="spinner" class="spinner">
                    <div class="wBall" id="wBall_1">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div class="wBall" id="wBall_2">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div class="wBall" id="wBall_3">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div class="wBall" id="wBall_4">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div class="wBall" id="wBall_5">
                        <div class="wInnerBall">
                        </div>
                    </div>
                </div>
                <!--/ Loading Spinner -->

                <!-- Alternative site Logo, appears only on Home Page -->
                <div class="site-logo-alt invisible"></div>
                <!--/ Alternative site Logo, appears only on Home Page -->

                <!-- Main Slider -->
                <div id="main-slider" class="main-slider carousel slide fade-effect invisible">
                   
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                    
                    
                        <!-- Item -->
                        <section class="active item" style="background-image: url(<?php echo $baseUrl; ?>/images/temp/slide-1.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="page-title" data-animate-in="fadeInLeft" data-animate-out="fadeOutLeft">Lorem Ipsum is simply dummy text</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="page-desc" data-animate-in="fadeInRight" data-animate-out="fadeOutRight">Pain may last a minute, an hour, or a day, but eventually it will subside and something else will take its place. If you quit, however, it will last forever.<span class="angle"></span></div>
                                        <a href="#" class="btn" data-animate-in="fadeInUp" data-animate-out="fadeOutDown"><span>More info</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--/ Item -->

                        <!-- Item -->
                        <section class="item" style="background-image: url(<?php echo $baseUrl; ?>/images/temp/slide-2.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="page-title" data-animate-in="fadeInLeft" data-animate-out="fadeOutLeft">Lorem Ipsum is simply dummy text</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="page-desc" data-animate-in="fadeInRight" data-animate-out="fadeOutRight">Pain may last a minute, an hour, or a day, but eventually it will subside and something else will take its place. If you quit, however, it will last forever.<span class="angle"></span></div>
                                        <a href="#" class="btn" data-animate-in="fadeInUp" data-animate-out="fadeOutDown"><span>check out my workouts</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--/ Item -->

                        <!-- Item -->
                        <section class="item" style="background-image: url(<?php echo $baseUrl; ?>/images/temp/slide-3.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="page-title" data-animate-in="fadeInLeft" data-animate-out="fadeOutLeft">Lorem Ipsum is simply dummy text</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="page-desc" data-animate-in="fadeInRight" data-animate-out="fadeOutRight">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus in pellentesque faucibus vestibulum. Dulla at nulla justo.<span class="angle"></span></div>
                                        <a href="#" class="btn" data-animate-in="fadeInUp" data-animate-out="fadeOutDown"><span>let's meet in person</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--/ Item -->

                        <!-- Item -->
                        <section class="item" style="background-image: url(<?php echo $baseUrl; ?>/images/temp/slide-4.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="page-title" data-animate-in="fadeInLeft" data-animate-out="fadeOutLeft">Work hard everyday. No guts, no glory!</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="page-desc" data-animate-in="fadeInRight" data-animate-out="fadeOutRight">In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin.<span class="angle"></span></div>
                                        <a href="#" class="btn" data-animate-in="fadeInUp" data-animate-out="fadeOutDown"><span>more about me</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--/ Item -->
                        
                         
                        
                    </div>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators" data-animate-in="fadeInUp" data-animate-out="fadeOutDown">
                        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slider" data-slide-to="1"></li>
                        <li data-target="#main-slider" data-slide-to="2"></li>
                        <li data-target="#main-slider" data-slide-to="3"></li>
                    </ol>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#main-slider" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#main-slider" data-slide="next">&rsaquo;</a>
                    
                  
                    
                </div>
                <!--/ Main Slider -->
                
            </div>
        </section>
        <!--/ Page Titles & Slider or image -->
        
        <div class="search_box"> 
                          <div class="container">
                           <div class="col-sm-3"> 
                           
                              <div class="dropdown">
                                  <button id="dLabel" class="search_option" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services Option....
                            
                                    <i class="fa fa-chevron-circle-down down-arows_search"></i>

                                  </button>
                                  <ul class="dropdown-menu search_drop-bg" aria-labelledby="dLabel">
                                    <li><a href="#"> SPORTS </a> </li>
                                    <li><a href="#"> ARTS </a> </li>
                                    <li><a href="#"> MUSIC </a> </li>
                                    <li><a href="#"> DANCE </a> </li>
                                    <li><a href="#"> STUDY </a> </li>
                                    <li><a href="#"> FUN </a> </li>
                                  </ul>
                              </div>
                           </div>
                           <div class="col-sm-9"> 
                              <form class="navbar-form navbar-left search_from" role="search">
        <div class="form-group search_fil">
          <input type="text" class="form-control" placeholder="Optional Keywords ...................">
        </div>
        <button type="submit" class="btn btn-default search_submit">Submit</button>
      </form>
                           </div>
                          </div>
                        </div>
        

        <!-- PostList 3 Columns -->
    <div class="masanary_section"> 
       <div id="container">
         
         <div class="container">
           <h1> Browse by Activity </h1>
		<div class="grid-sizer"></div>
       <div class="col-sm-8">
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/arts.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div> 
       <div class="col-sm-4">
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/dance.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div> 
       <div class="col-sm-4">
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/fun.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div> 
        <div class="col-sm-4">
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/music.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div>
       <div class="col-sm-4">
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/catagory.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div>
        <div class="col-sm-5"> 
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/sports.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div>
       <div class="col-sm-7"> 
		<div class="item">
			<img src="<?php echo $baseUrl; ?>/images/temp/stady.jpg" class="image" alt="">
			<a class="overlay" href="#">
				<h3 class="title">Some title</h3>
				<div class="description">
					<p>
						Lorem ipsum dolor sit amet, <br>
						consectetur adipisicing elit.
					</p>
				</div>
			</a>
		</div>
       </div> 
		
		
       </div>
	</div>
        
  </div>      
        
  <!-- <div class="container">
   <div class="masanery_div">
       <h1> Browse by Activity </h1>
        <div class="row">
            <div class="col-lg-8 col-sm-6">
               <div class="box"> <img src="<?php echo $baseUrl; ?>/images/temp/arts.jpg">
                <div class="mask">
                  <h2><span class="word1">Through</span>the Wormhole</h2>
                  
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-sm-6"> 
               <div class="box"> <img src="http://files.room1design.com/morgan.jpg">
                <div class="mask">
                  <h2><span class="word1">Through</span>the Wormhole</h2>
                  
                </div>
            </div>
            </div>
       </div>
        
   </div>     
        
</div>  -->
 
        
        
        
        <!--/ PostList 3 Columns -->
        <section class="how_work"> 
          <div class="container">
            <h1> How it Works </h1>
          <div class="row">
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img class="media-object" src="<?php echo $baseUrl; ?>/images/How1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        
                          <p><strong>Find Activity -</strong> Search for a specific activity for your child or browse and discover new activities.  </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img class="media-object" src="<?php echo $baseUrl; ?>/images/How2.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        
                        <p> <strong>Select Activity - </strong>Select the activity for the available date and time. Review the details of the activity. </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img class="media-object" src="<?php echo $baseUrl; ?>/images/How3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        
                        <p><strong>Confirm Activity –</strong> Confirm the selected activity instantly. Registration is free.Free trial activities are free for all registered users and paying users can also access paid activities. </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img class="media-object" src="<?php echo $baseUrl; ?>/images/How4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        
                        <p><strong>Email Confirmation –</strong> An email confirmation will be sent to your registered email and users can also review confirmed registrations on our site.  </p>
                      </div>
                  </div>
              </div>
             
          </div>  
          </div>
        </section>
    </div>
    <!--/ Main -->

    <!-- Footer -->
    <footer class="site-footer" role="contentinfo">
        <div class="footer-paralux">
            <h4> Join our Monthly Membership </h4>
            <h3> Take any class at your free time flexibly for whole month </h3>
            <a class="btn btn-black btn-small btn-transparent" href="#" hidefocus="true" style="outline: medium none;">
<span>Sing up now</span>
</a>
        </div>

        <div class="footer_widget"> 
          <div class="container footer-div">
           <div class="col-sm-4">
              <h4> Addrss </h4>
              
                  <div class="contact-address details">
                    <ul class="media-list">
                  <li class="media description">
                    <div class="media-left">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="media-body">
                      <p>Lorem Ipsum is simply dummy text of the printing  </p>
                    </div>
                  </li>
                  <li class="media description">
                    <div class="media-left">
                      <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                      <p>+48 123 456 789 </p>
                    </div>
                  </li>
                  <li class="media description">
                    <div class="media-left ">
                      <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="media-body">
                      <p>Info@test.com </p>
                    </div>
                  </li>
                  <li class="media description">
                    <div class="media-left ">
                      <i class="fa fa-skype"></i>
                    </div>
                    <div class="media-body">
                      <p>Your Company</p>
                    </div>
                  </li>
                </ul>
                
                  <div class="socail_icon"> 
                     <ul>
                        <li><a href="#"> <i class="fa fa-facebook"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-twitter"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-google-plus"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                     </ul>
                  </div>
                
                  </div>
              
           </div>
          <!-- <div class="col-sm-3 twitter_div">
              <h4> Recent Tweets </h4>
                 
                 <ul class="media-list">
                  <li class="media">
                    <div class="media-left">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="media-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of </p>
                    </div>
                  </li>
                </ul>
                
                <ul class="media-list">
                  <li class="media">
                    <div class="media-left">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="media-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of </p>
                    </div>
                  </li>
                </ul>
                 
            </div> -->
           <div class="col-sm-4 about-footer">
              <h4> About </h4>
                
                <p>Description about the site</p>
             <!-- <ul>
                 <li><a href="#"> My Account </a></li>
                 <li><a href="#"> View Order </a></li>
                 <li><a href="#"> Privacy and Security </a></li>
                 <li><a href="#"> Promotions </a></li>
                 <li><a href="#"> About Us </a></li>
                 <li><a href="#"> Contact Us </a></li>
              </ul> -->
              
            </div>
           <div class="col-sm-4">
              <h4> Learn More </h4>
              
               <ul>
                 <li><a href="#"> FAQ </a></li>
                 <li><a href="#"> Terms </a></li>
                 <li><a href="#"> Privacy and Security </a></li>
                 <li><a href="#"> Partners </a></li>
                 <li><a href="#"> Blog </a></li>
                 <li><a href="#"> Press </a></li>
              </ul>
              
          <!-- <form id="contact-form" class="contact-form form-dark" action="#" method="post">
            <div class="field-text">
            <input id="name" type="text" placeholder="NAME" value="" name="name" hidefocus="true" style="outline: medium none;">
            </div>
            <div class="field-text">
            <input id="email" type="email" placeholder="EMAIL" value="" required name="email" hidefocus="true" style="outline: medium none;">
            </div>
            <div class="clearfix"></div>
            <div class="field-text">
            <textarea id="message" placeholder="MESSAGE" required name="message" hidefocus="true" style="outline: medium none;"></textarea>
            </div>
            <span class="btn btn-padding-big pull-left">
            <input type="submit" value="Send" hidefocus="true" style="outline: medium none;">
            </span>
            </form> -->
              
            </div>
          </div>   
        </div>

        <div class="copyright">Copyright © 2015. activity All rights reserved</div>
    </footer>
    <!-- Site Footer -->

</div>





<script type="text/javascript">
function site_login()
{
    $.ajax({
        type: "POST",
        url: "<?php echo Yii::app()->createUrl('site/sitelogin'); ?>",
        data:{user_name:$("#user_name").val() , user_password: $("#user_password").val()},
        success: function(msg) {
          if(msg!=""){
             document.location.reload(true);   
          }else{
             $(".msg-error").html("Invalid username or password");
          }
        }
    });
}

function site_logout()
{
    $.ajax({
        type: "POST",
        url: "<?php echo Yii::app()->createUrl('site/sitelogout'); ?>",
        data:{user_name:$("#user_name").val() , user_password: $("#user_password").val()},
        success: function(msg) {
           document.location.reload(true);           
        }
    });
}

function site_registration()
{
  
    $.ajax({
        type: "POST",
        url: "<?php echo Yii::app()->createUrl('site/siteregistration'); ?>",
        data: $("#reg-form").serialize(),
        success: function(msg) {
         alert(msg);
        }
    });
}

    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        $("#login_form").validationEngine();
    });
</script>