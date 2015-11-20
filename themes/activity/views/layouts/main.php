<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        //Yii::app()->clientScript->registerCoreScript('jquery');
        ?>

 <!-- Core CSS -->
    <link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>/style.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="<?php echo $baseUrl; ?>/custom.css" media="screen" rel="stylesheet" type="text/css">
    
    <!-------- masanary css ---------------->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/main.css" />         
    <script src="<?php echo $baseUrl; ?>/js/libs/jquery-1.11.0.min.js"></script>
    <!-- Modernizr Library -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/validationEngine.jquery.css" />
    <script src="<?php echo $baseUrl; ?>/js/jquery.validationEngine.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/languages/jquery.validationEngine-en.js"></script>
     <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/js/jquery.datetimepicker.css" />
<script src="<?php echo $baseUrl; ?>/js/jquery.datetimepicker.js"></script>
    </head>
    <body>
        
        <div id="page" class="hfeed site">
            <?php 
            require_once('header.php');            
            echo $content;            
            require_once('footer.php'); 
            ?>
        </div>
<!-- #page -->
<!-- JS Placed at the end of the document for faster page loading -->
<!-- Libs -->

<!--<script src="<?php echo $baseUrl; ?>/js/libs/jquery-ui-1.10.4.min.js"></script>-->
<script src="<?php echo $baseUrl; ?>/js/libs/bootstrap.min.js"></script>
<!--[if lt IE 9]><script src="<?php echo $baseUrl; ?>/js/libs/respond.min.js"></script><![endif]-->


<!-- Responsive Menu, Animated Dropdown -->
<script src="<?php echo $baseUrl; ?>/js/jquery.slicknav.min.js"></script>

<!-- CarouFredSel -->
<script src="<?php echo $baseUrl; ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo $baseUrl; ?>/js/jquery.touchSwipe.min.js"></script>

<!-- Placeholders -->
<script src="<?php echo $baseUrl; ?>/js/jquery.powerful-placeholder.min.js"></script>

<!-- Styled Select -->
<script src="<?php echo $baseUrl; ?>/js/cusel.min.js"></script>

<!-- Attach Testimage to Header -->
<script>
    jQuery(function($) {
        $('.main-slider, .page-header').prepend('<img src="<?php echo $baseUrl; ?>/images/temp/slide-1.jpg" alt="" id="testimage" class="hidden">');
    });
</script>

<!-- General Scripts -->
<script src="<?php echo $baseUrl; ?>/js/general.js"></script>

</body>
</html>