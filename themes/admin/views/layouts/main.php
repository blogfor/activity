<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>


        <link href="<?php echo $baseUrl; ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel='stylesheet' id='layerslider-css'  href='<?php echo $baseUrl; ?>/css/layerslider.css' type='text/css' media='all' />
        <script type='text/javascript' src='<?php echo $baseUrl; ?>/js/layerslider.kreaturamedia.jquery.js'></script>
        <script type='text/javascript' src='<?php echo $baseUrl; ?>/js/greensock.js'></script>
        <script type='text/javascript' src='<?php echo $baseUrl; ?>/js/layerslider.transitions.js'></script>

        <script type="text/javascript">
            var lsjQuery = jQuery;
        </script>
        <script type="text/javascript">
            lsjQuery(document).ready(function()
            {
                if (typeof lsjQuery.fn.layerSlider == "undefined")
                {
                    lsShowNotice('layerslider_1', 'jquery');
                }
                else {
                    lsjQuery("#layerslider_1").layerSlider({responsiveUnder: 1200, layersContainer: 1200, startInViewport: false, showCircleTimer: false, skinsPath: ''})
                }
            });
        </script>
    </head>
    <body>
        <!-- End Backslider -->

        <section class="top">
            <div class="container">

                <!--<div class="col-sm-4 center-align">
                    <img src="<?php echo $baseUrl; ?>/images/logo.png">
                </div>-->
                <div class="row">
                    <div class="col-sm-12 right-align">
                        <p class="white cart">
                            <?php require_once('tpl_top_navigation.php') ?>

                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--<div class="col-sm-12 center-align">
                    <img src="<?php echo $baseUrl; ?>/images/logo.png">
                </div>-->
                <div class="clearfix"></div>
            </div>
        </section><!-- end top -->

        <!-- ::::::::::::::::::::::::: NAV :::::::::::::::::::::::::::: -->
        <section class="top-nav"></section>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo CHtml::link('<img src="'.$baseUrl.'/images/logo.png" />', array('site/index'),array('class'=>'navbar-brand')); ?>
                   
                </div>
                <?php require_once('tpl_navigation.php') ?>
            </div>
        </nav>
        <section class="bottom-nav">
        </section>



        <?php
        echo $content;
        ?>

        <?php require_once('tpl_footer.php') ?>


    </body>
</html>