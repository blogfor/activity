<header id="masthead" class="site-header">
    <?php $siteSettings = ActivityCommon::get_setting_info(); ?>
    <!--    <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 phone_number">
                        <div class="phone_icon"> <i class="fa fa-phone-square"></i> </div>
                        <h5><?php echo $siteSettings['site_phone']; ?></h5>
                    </div>
                    <div class="col-sm-6 log_re">
    
    <?php
    if (isset($_SESSION['user_name'])) {
        ///USER LOGEDIN
        echo '<a class="btn btn-transparent login" href="' . Yii::app()->createUrl('/atUsers/profiledtls') . '" hidefocus="true" style="border:0 !important;" >';
        echo "<span> Hi " . $_SESSION['user_name'] . "</span>";
        echo '</a>';
        ?>    
                                <a class="btn btn-transparent regestration" href="#" hidefocus="true"  onclick="site_logout();" style="outline: medium none;">
                                    <span>Logout</span>
                                </a>
        <?php
    } else {
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
        </div>-->


    <!--LOGIN MODAL BOX-->
    <div id="mylogin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" id="lognform">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">


                    <div class="alert alert-danger" role="alert" id="msg-error-login"></div>

                    <div class="panel panel-default">
                        <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <form name="login_form" id="login_form" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="user_name" id="user_name" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" id="exampleInputEmail1" placeholder="User Name" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input name="user_password" id="user_password" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Password" type="password">
                                    </div>                    
                                    <input type="submit" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" onclick="javascript: return site_login();"  value="Login"/> &nbsp;
                                    <a href="javascript: forgotPassword();">Forgot Password</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>-->
            </div>



            <div class="modal-content" id="forgotpassword" style="display: none;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">

                <div class="alert alert-danger" role="alert" id="msg-error-forgot"></div>
                    <div class="panel panel-default">
                        <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <form name="forgot-form" id="forgot-form" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="forgotemail" id="forgotemail" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" id="exampleInputEmail1" placeholder="Email" type="text">
                                    </div>


                                    <input type="submit" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" onclick="javascript: return site_forgot();" value="Submit"/>
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





    <!-- Menu Button -->
    <span id="menu-call" class="tficon-menu invisible"></span>
    <!--/ Menu Button -->
    <?php require_once('tpl_navigation.php') ?>

</header>
<!--/ Header -->

<script type="text/javascript">
    function forgotPassword()
    {
        $('#lognform').hide('slow');
        $('#forgotpassword').show('slow');

    }
    $(document).ready(function() {

        $("#login_form").validationEngine();
        $("#msg-error-login").hide();
        $("#msg-error-forgot").hide();
    });


    function site_forgot()
    {
        if ($("#forgot-form").validationEngine('validate'))
        {
                        $("#msg-error-forgot").show('hide');
                        $("#msg-error-forgot").html('');
            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('site/siteforgot'); ?>",
                data: {forgotemail: $("#forgotemail").val()},
                success: function(msg) {
                    if (msg == "0") {
                         $("#msg-error-forgot").show('slow');
                        $("#msg-error-forgot").html("Please check your email. Email does not exist in our record.");
                       
                        $("#forgotemail").val('');
                        $("#forgotemail").focus();
                    } else {
                        $("#msg-error-forgot").show('slow');
                         $("#msg-error-forgot").removeClass('alert-danger');
                          $("#msg-error-forgot").addClass('alert-success');
                        $("#msg-error-forgot").html("Please check your inbox. New password has been send to your email.");
                        
                        
                      
                        
                       
                    }
                }
            });

        }
        return false;
    }

    function site_login()
    {
        if ($("#login_form").validationEngine('validate'))
        {

            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('site/sitelogin'); ?>",
                data: {user_name: $("#user_name").val(), user_password: $("#user_password").val()},
                success: function(msg) {
                    if (msg != "") {
                        document.location.reload(true);
                        return true;
                    } else {
                        $("#msg-error-login").show('slow');
                        $("#msg-error-login").html("Invalid email or wrong password.");
                        return false;
                    }
                }
            });

        }
        return false;
    }

    function site_logout()
    {
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('site/sitelogout'); ?>",
            data: {user_name: $("#user_name").val(), user_password: $("#user_password").val()},
            success: function(msg) {
                document.location.href = '<?php echo Yii::app()->createUrl('site/index'); ?>';
            }
        });
    }


</script>