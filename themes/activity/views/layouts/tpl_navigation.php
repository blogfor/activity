<!-- Logo & Menu -->
<div class="header invisible">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-logo"><a href="<?php echo Yii::app()->createUrl('/site/index');?>"><img src="<?php echo $baseUrl; ?>/images/Logo1.png" alt="Activity"></a></div>

                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <ul class="nav-menu clearfix">
<!--                        <li class="active"><a href="#"><span>HOME</span></a></li>-->
                       
                                            <?php
                    if (isset($_SESSION['user_name'])) {
                        
                        if($_SESSION['user_type']=="Customer")
                            $profile_link=Yii::app()->createUrl('/atUsers/profiledtls');
                        else
                            $profile_link=Yii::app()->createUrl('/atUsers/partnerdtls');
                        
                    ///USER LOGEDIN
                        echo '<li><a href="'.$profile_link.'" hidefocus="true" >';
                        echo "<span> Hi " . $_SESSION['user_name'] . "</span>";
                        echo '</a></li>';
                        ?>    
                        <li>
                            <a href="#" hidefocus="true"  onclick="site_logout();">
                            <span>Logout</span>
                            </a>
                        </li>
                        <?php
                    } else {
                        ?>
                       <li><a href="<?php echo Yii::app()->createUrl('/atUsers/registrationpartner'); ?>"><span>Register for Free</span></a></li>
                       <li><a href="#" data-toggle="modal" data-target="#mylogin"><span>Login </span></a></li>

                    <?php } ?>  
                        
                        
                        
                        
                        
                        
                        <li>
                            <a href="#">LEARN MORE</a>
                            <ul>
                                <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'how_it_works')); ?>"><span>How it Works</span></a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'faq')); ?>"><span>FAQ</span></a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'terms')); ?>"><span>Terms</span></a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'privacy_and_security')); ?>"><span>Privacy</span></a></li>
                            </ul>
                        </li>
<!--                        <li><?php echo CHtml::link('<span>Contact</span>', array('site/contact'), array('class' => '')); ?></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--/ Logo & Menu -->