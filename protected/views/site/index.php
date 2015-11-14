<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<!--<script src="<?php echo $baseUrl;?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $baseUrl;?>/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/validationEngine.jquery.css" type="text/css"/>-->



    <!-- Header -->
    

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
                   
                </div>
                <!--/ Loading Spinner -->

                <!-- Alternative site Logo, appears only on Home Page -->
                <div class="site-logo-alt invisible"></div>
                <!--/ Alternative site Logo, appears only on Home Page -->

                <!-- Main Slider -->
                <div id="main-slider" class="main-slider carousel slide fade-effect invisible">
                   
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                                   
                       
                        
                        <?php 
                        
                     
              foreach($resultBANNER as $rBANNER) {

              ?>
              
                        <section class="item" style="background-image: url('http://blogfordeveloper.com/demo/activity/uploads/<?php echo $rBANNER['banner_image'];?>');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="page-title" data-animate-in="fadeInLeft" data-animate-out="fadeOutLeft"><?php echo $rBANNER['banner_title'];?></h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="page-desc" data-animate-in="fadeInRight" data-animate-out="fadeOutRight"><?php echo $rBANNER['banner_description'];?><span class="angle"></span></div>
              <?php if($rBANNER['banner_link']!=''){ ?><a href="<?php echo $rBANNER['banner_link'];?>" class="btn" data-animate-in="fadeInUp" data-animate-out="fadeOutDown"><span>more about me</span></a><?php }?>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
              
              
              
             <?php 
              }
              ?>
                         
                        
                    </div>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators" data-animate-in="fadeInUp" data-animate-out="fadeOutDown">
                        <?php 
                        
              foreach($resultBANNER as $rBANNER) {
              ?>
                   <li data-target="#main-slider" data-slide-to="<?php echo $rBANNER['id'];?>"></li>
                         <?php 
              }
              ?>
                        
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
 
        
        
        
        <!--/ PostList 3 Columns -->
        <section class="how_work"> 
          <div class="container">
            <h1> How it Works </h1>
          <div class="row">
              
              <?php 
              foreach($resultHIW as $rHIW) {
              ?>
              
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'how_it_works')); ?>">
                          <img class="media-object" src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rHIW['hwt_image'];?>" alt="<?php echo $rHIW['hwt_name'];?>">
                        </a>
                      </div>
                      <div class="media-body">
                        
                          <p><strong><?php echo $rHIW['hwt_name'];?> -</strong> <?php echo $rHIW['hwt_description'];?>  </p>
                      </div>
                  </div>
              </div>
              
              
             <?php 
              }
              ?>
          </div>  
          </div>
        </section>
        
        
          <section class="how_work"> 
          <div class="container">
            <h1> Discover New Kids Activities </h1>
          <div class="row">
              
              <?php 
              foreach($resultKA as $rKIA) {
              ?>
              
              <div class="col-sm-6 work">
                  <div class="media">
                      <div class="media-left media-middle">
                        <a href="javascript:void(0);">
                          <img class="media-object" src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rKIA['kids_image'];?>" alt="<?php echo $rKIA['kids_name'];?>">
                        </a>
                      </div>
                      <div class="media-body">
                        
                          <p><strong></strong> <?php echo $rKIA['kids_description'];?>  </p>
                      </div>
                  </div>
              </div>
              
              
             <?php 
              }
              ?>
          </div>  
          </div>
        </section>
        
        
    </div>
    <!--/ Main -->