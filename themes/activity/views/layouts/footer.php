<footer class="site-footer" role="contentinfo">
    <div class="footer-paralux">
        <h4> Join our Monthly Membership </h4>
        <h3> Take any class at your free time flexibly for whole month </h3>
        <a class="btn btn-black btn-small btn-transparent" href="<?php echo Yii::app()->createUrl('/atUsers/registration'); ?>" hidefocus="true" style="outline: medium none;">
            <span>GET STARTED NOW</span>
        </a>
    </div>

    <div class="footer_widget"> 
        <div class="container footer-div">


            <div class="col-sm-4 about-footer">
                <div class=""><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>">
                        <img src="<?php echo $baseUrl; ?>/images/Logo1.png" alt="Activety"></a></div>

                <p>We are a platform which gives you one-stop
                    access to children enrichment classes,
                    dance, sports and many other fun activities
                    for your kids, allowing them to discover new
                    skills every day.</p>


            </div>

            <div class="col-sm-2">
                <h4> COMPANY </h4>

                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'about_us')); ?>">About Us </a></li>

                    <li><a href="#"> Blog </a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'press')); ?>"> Press </a></li>
                </ul>



            </div>


            <div class="col-sm-2">
                <h4> LEARN MORE </h4>

                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'faq')); ?>"> FAQ </a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'terms')); ?>"> Terms </a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('/pages/view',array('p'=>'privacy_and_security')); ?>"> Privacy and Security </a></li>

                </ul>



            </div>

            <div class="col-sm-2">
                <h4> PARTNERS </h4>

                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/atUsers/partnerregistration'); ?>"> Interested in
                            Partnership? </a></li>

                </ul>



            </div>


            <div class="col-sm-2">
                <h4> CONNECT </h4>

                <div class="contact-address details">
                    <ul class="media-list">

                        <li class="media description">
                            <div class="media-left ">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <p style="font-size:12px !important;"><?php echo $siteSettings['site_email'];?></p>
                            </div>
                        </li>

                    </ul>

                    <div class="socail_icon"> 
                        <ul>
                            <li><a href="<?php echo $siteSettings['site_fb'];?>" target="_blank"> <i class="fa fa-facebook"></i></a> </li>
                            <li><a href="<?php echo $siteSettings['site_twitter'];?>" target="_blank"> <i class="fa fa-twitter"></i></a> </li>
                            <li><a href="<?php echo $siteSettings['site_gplus'];?>" target="_blank"> <i class="fa fa-google-plus"></i></a> </li>
                            
                        </ul>
                    </div>

                </div>

            </div>



        </div>   
    </div>

    <div class="copyright">Copyright &copy; <?php echo date('Y'); ?>. activity All rights reserved</div>
</footer>
<!-- Site Footer -->