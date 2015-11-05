<!-- Logo & Menu -->
<div class="header invisible">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-logo"><a href="<?php echo Yii::app()->createUrl('/site/index');?>"><img src="<?php echo $baseUrl; ?>/images/Logo1.png" alt="Activety"></a></div>

                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <ul class="nav-menu clearfix">
                        <li class="active"><a href="#"><span>HOME</span></a></li>
                        <li><a href="#"><span>Register for Free</span></a></li>
                        <li><a href="#"><span>Login </span></a></li>

                        <li>
                            <a href="#">LEARN MORE</a>
                            <ul>
                                <li><a href="#"><span>How it Works</span></a></li>
                                <li><a href="#"><span>FAQ</span></a></li>
                                <li><a href="#"><span>Terms</span></a></li>
                                <li><a href="#"><span>Privacy</span></a></li>


                            </ul>
                        </li>
                        <li><?php echo CHtml::link('<span>Contact</span>', array('site/contact'), array('class' => '')); ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--/ Logo & Menu -->