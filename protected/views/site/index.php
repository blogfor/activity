<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>


<script>
    /*--SLIDER SCRIPT ----*/
    ;
    (function($, window, document, undefined) {

        $.fn.sss = function(options) {

// Options

            var settings = $.extend({
                slideShow: true,
                startOn: 0,
                speed: 3000,
                transition: 900,
                arrows: true
            }, options);

            return this.each(function() {

// Variables

                var
                        wrapper = $(this),
                        slides = wrapper.children().wrapAll('<div class="sss"/>').addClass('ssslide'),
                        slider = wrapper.find('.sss'),
                        slide_count = slides.length,
                        transition = settings.transition,
                        starting_slide = settings.startOn,
                        target = starting_slide > slide_count - 1 ? 0 : starting_slide,
                        animating = false,
                        clicked,
                        timer,
                        key,
                        prev,
                        next,
// Reset Slideshow

                        reset_timer = settings.slideShow ? function() {
                    clearTimeout(timer);
                    timer = setTimeout(next_slide, settings.speed);
                } : $.noop;

// Animate Slider

                function get_height(target) {
                    return ((slides.eq(target).height() / slider.width()) * 100) + '%';
                }

                function animate_slide(target) {
                    if (!animating) {
                        animating = true;
                        var target_slide = slides.eq(target);

                        target_slide.fadeIn(transition);
                        slides.not(target_slide).fadeOut(transition);

                        slider.animate({paddingBottom: get_height(target)}, transition, function() {
                            animating = false;
                        });

                        reset_timer();

                    }
                }
                ;

// Next Slide

                function next_slide() {
                    target = target === slide_count - 1 ? 0 : target + 1;
                    animate_slide(target);
                }

// Prev Slide

                function prev_slide() {
                    target = target === 0 ? slide_count - 1 : target - 1;
                    animate_slide(target);
                }

                if (settings.arrows) {
                    slider.append('<div class="sssprev"/>', '<div class="sssnext"/>');
                }

                next = slider.find('.sssnext'),
                        prev = slider.find('.sssprev');

                $(window).load(function() {

                    slider.css({paddingBottom: get_height(target)}).click(function(e) {
                        clicked = $(e.target);
                        if (clicked.is(next)) {
                            next_slide()
                        }
                        else if (clicked.is(prev)) {
                            prev_slide()
                        }
                    });

                    animate_slide(target);

                    $(document).keydown(function(e) {
                        key = e.keyCode;
                        if (key === 39) {
                            next_slide()
                        }
                        else if (key === 37) {
                            prev_slide()
                        }
                    });

                });
// End

            });

        };
    })(jQuery, window, document);
</script>

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
            <div id="main-slider" class="main-slider carousel slide fade-effect invisible"></div>

            <div class="slider">

                <?php foreach ($resultBANNER as $rBANNER): ?> 


                    <div>
                        <div class="wrapper-shadow"></div>
                        <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rBANNER['banner_image']; ?>" />
                        <div class="slide-caption">

                            <p class="banner-caption"><?php echo $rBANNER['banner_title']; ?></p>
                            <p class="banner-details"><?php echo $rBANNER['banner_description']; ?></p>
                            <?php
                            if (!empty($rBANNER['banner_link_text'])) {
                                ?>
                                <a href="<?php echo $rBANNER['banner_link']; ?>">
                                    <span class="banner-button"><?php echo $rBANNER['banner_link_text']; ?></span>
                                </a>    
                                <?php }
                            ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>
            <script>
                jQuery(function($) {
                    $('.slider').sss();
                });
            </script>


            <!--/ Main Slider -->

        </div>
    </section>
    <!--/ Page Titles & Slider or image -->

    <div class="search_box"> 
        <div class="container">
            <form method="POST" name="form_search" id="form_search" action="<?php echo Yii::app()->createUrl('/atActivity/searchactivity'); ?>">
                <div class="col-sm-3">        
                    <div class="dropdown">
                        <button id="dLabel" class="search_option" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="activity-text"> Activity </span>
                            <i class="fa fa-chevron-circle-down down-arows_search"></i>
                        </button>
                        <ul class="dropdown-menu search_drop-bg" aria-labelledby="dLabel">
                            <?php
                            foreach ($resultACTIVITY as $rActivity) {
                                echo '<li><a href="#" onclick="setvalue(this,' . $rActivity['id'] . ');">' . $rActivity['activity_name'] . '</a> </li>';
                            }
                            ?>        
                        </ul>
                        <input type="hidden" name="activity_id" id="activity_id" value="">
                    </div>
                </div>
                <div class="col-sm-9"> 
                    <span class="navbar-form navbar-left search_from" role="search">
                        <div class="form-group search_fil">
                            <input type="text" name="search_text" class="form-control" placeholder="Search by keywords">
                        </div>
                        <button type="submit" class="btn btn-default search_submit">Submit</button>
                    </span>       
                </div>
            </form>

        </div>
    </div>


    <!-- PostList 3 Columns -->
    <div class="masanary_section"> 
        <div id="container">

            <div class="container">
                <h1> Browse by Activity </h1>
                <div class="grid-sizer"></div>

                <?php
                $i = 1;
                foreach ($resultACTIVITY as $rActivity) {
                    ?>


                    <div class="col-sm-<?php echo ($i == 3 || $i == 4 || $i == 7) ? '5' : '3'; ?>">
                        <div class="item">
                            <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rActivity['activity_image']; ?>" class="image" alt="">
                            <a class="overlay" href="#">
                                <h3 class="title"><?php echo $rActivity['activity_name']; ?></h3>
                                <div class="description">
                                    <p>
    <?php echo $rActivity['activity_description']; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div> 


    <?php
    $i++;
}
?>




            </div>
        </div>

    </div>      




    <!--/ PostList 3 Columns -->
    <section class="how_work" id="howtowork"> 
        <div class="container">
            <h1> How it Works </h1>
            <div class="row">

<?php
foreach ($resultHIW as $rHIW) {
    ?>

                    <div class="col-sm-6 work">
                        <div class="media-block">
                            <div class="media-thumb">
                                <a href="<?php echo Yii::app()->createUrl('/pages/view', array('p' => 'how_it_works')); ?>">
                                    <img class="media-object" src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rHIW['hwt_image']; ?>" alt="<?php echo $rHIW['hwt_name']; ?>">
                                </a>
                            </div>
                            <div class="media-title">
    <?php echo $rHIW['hwt_name']; ?>
                            </div>
                            <div class="media-content">                        
                                <?php echo $rHIW['hwt_description']; ?>  
                            </div>
                        </div>
                    </div>


    <?php
}
?>
            </div>  
        </div>
    </section>


    <section class="how_work" style="background-color:#f2f2f2;"> 
        <div class="container">
            <h1> Discover New Kids Activities </h1>
            <div class="row">

<?php
foreach ($resultKA as $rKIA) {
    ?>

                    <div class="col-sm-6 work">
                        <div class="media-block">
                            <div class="media-thumb">
                                <a href="javascript:void(0);">
                                    <img class="media-object" src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $rKIA['kids_image']; ?>" alt="<?php echo $rKIA['kids_name']; ?>">
                                </a>
                            </div>
                            <div class="media-content">                        
    <?php echo $rKIA['kids_description']; ?>  
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


<script>

    function setvalue(obj, aid) {
        $("#activity-text").html($(obj).html());
        $("#activity_id").val(aid);
    }

    $(function() {
        $('#main-slider').carousel();
    });
</script>