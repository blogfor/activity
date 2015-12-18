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
                                <div class="sk-cube-grid" id="loader-login">
                                    <div class="sk-cube sk-cube1"></div>
                                    <div class="sk-cube sk-cube2"></div>
                                    <div class="sk-cube sk-cube3"></div>
                                    <div class="sk-cube sk-cube4"></div>
                                    <div class="sk-cube sk-cube5"></div>
                                    <div class="sk-cube sk-cube6"></div>
                                    <div class="sk-cube sk-cube7"></div>
                                    <div class="sk-cube sk-cube8"></div>
                                    <div class="sk-cube sk-cube9"></div>
                                </div>
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
                                <div class="sk-cube-grid" id="loader-forgot">
                                    <div class="sk-cube sk-cube1"></div>
                                    <div class="sk-cube sk-cube2"></div>
                                    <div class="sk-cube sk-cube3"></div>
                                    <div class="sk-cube sk-cube4"></div>
                                    <div class="sk-cube sk-cube5"></div>
                                    <div class="sk-cube sk-cube6"></div>
                                    <div class="sk-cube sk-cube7"></div>
                                    <div class="sk-cube sk-cube8"></div>
                                    <div class="sk-cube sk-cube9"></div>
                                </div>
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
    <div id="myRegistration" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <?php
            $baseUrl = Yii::app()->theme->baseUrl;
            ?>
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" >
                    <div class="modal-header"><h3>GET STARTED WITH ACTIVITY HERE</h3></div>
                    <div class="modal-body">
                        <?php if (Yii::app()->user->hasFlash('successMailPartner')): ?>
                            <div id="statusMsg">
                                <div class="alert alert-success">
                                    <?php echo Yii::app()->user->getFlash('successMailPartner'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (Yii::app()->user->hasFlash('errorMailPartner')): ?>
                            <div id="statusMsg">
                                <div class="alert alert-error">
                                    <?php echo Yii::app()->user->getFlash('errorMailPartner'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!--REGISTRATION MODAL BOX-->
                        <div >
                            <div class="reg-msg-error alert alert-danger"></div>
                            <div class="reg-msg-success alert alert-success"></div>
                            <div class="panel panel-default">
                                <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="sk-cube-grid" id="loader-reg-form">
                                            <div class="sk-cube sk-cube1"></div>
                                            <div class="sk-cube sk-cube2"></div>
                                            <div class="sk-cube sk-cube3"></div>
                                            <div class="sk-cube sk-cube4"></div>
                                            <div class="sk-cube sk-cube5"></div>
                                            <div class="sk-cube sk-cube6"></div>
                                            <div class="sk-cube sk-cube7"></div>
                                            <div class="sk-cube sk-cube8"></div>
                                            <div class="sk-cube sk-cube9"></div>
                                        </div>
                                        <form method="post" name="reg-form" id="reg-form">
                                            <div class="form-group">
                                                <!--                                        <label for="exampleInputEmail1">First Name</label>-->
                                                <input name="firstname" id="firstname" style="outline: medium none;" value=""  class="form-control validate[required]" placeholder="First Name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <!--                                        <label for="exampleInputEmail1">Last Name</label>-->
                                                <input name="lastname" id="lastname"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Last Name" type="text">
                                            </div>  
                                            <div class="form-group">
                                                <!--                                        <label for="exampleInputEmail1">Email</label>-->
                                                <input name="email" id="email"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" placeholder="Email" type="email">
                                            </div>   
                                            <div class="form-group">
                                                <!--                                        <label for="exampleInputMobile">Mobile</label>-->
                                                <input name="mobile" id="mobile"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[number],maxSize[10]]" placeholder="Mobile" type="phone">
                                            </div> 
                                            <div class="form-group">
                                                <!--                                        <label for="exampleInputMobile">Password</label>-->
                                                <input name="password" id="password"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Password" type="password">
                                            </div> 
                                            <input type="hidden" name="ctype" value="Customer" checked="checked">
                                            <div class="form-group">
                                                <label for="exampleInputMobile"> <input type="checkbox" name="chkAge" id="chkAge" value="Yes" onclick="javascript:fnAGe(this.value);" /> Register kids with account now? </label>
                                            </div>
                                            <div id="ageGroup1" style="display: none;">
                                                <div class="form-group">
                                                    <!--                                        <label for="exampleInputMobile">Select number of children</label>-->
                                                    <select name="nochildren" id="nochildren"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" onchange="javascript:noAge(this.value);">
                                                        <option value="">Select number of children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="agen1" style="display: none;">
                                                <label for="exampleInputMobile">Name of child </label>
                                                <input name="childname1" id="childname1"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Child Name(One)" type="text">
                                            </div> 
                                            <div class="form-group" id="age1" style="display: none;">
                                                <label for="exampleInputMobile">Child’s Date of Birth </label>
                                                <input name="childage1" id="childage1"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,minSize[10]]" placeholder="Child’s Date of Birth(One)" type="text">
                                                <?php
                                                getDatePicker('childage1');
                                                ?>
                                            </div> 
                                            <div class="form-group" id="agen2" style="display: none;">
                                                <label for="exampleInputMobile">Name of child </label>
                                                <input name="childname2" id="childname2"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Child Name(two)" type="text">
                                            </div> 
                                            <div class="form-group" id="age2" style="display: none;">
                                                <label for="exampleInputMobile">Child’s Date of Birth </label>
                                                <input name="childage2" id="childage2"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,minSize[10]]" placeholder="Child’s Date of Birth(two)" type="text">
                                                <?php
                                                getDatePicker('childage2');
                                                ?>
                                            </div>
                                            <div class="form-group" id="agen3" style="display: none;">
                                                <label for="exampleInputMobile">Name of child </label>
                                                <input name="childname3" id="childname3"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Child Name(three)" type="text">
                                            </div> 
                                            <div class="form-group" id="age3" style="display: none;">
                                                <label for="exampleInputMobile">Child’s Date of Birth</label>
                                                <input name="childage3" id="childage3"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,minSize[10]]" placeholder="Child’s Date of Birth(three)" type="text">
                                                <?php
                                                getDatePicker('childage3');
                                                ?>
                                            </div>
                                            <div class="form-group" id="agen4" style="display: none;">
                                                <!--                                        <label for="exampleInputMobile">Name of child </label>-->
                                                <input name="childname4" id="childname4"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Child Name(four)" type="text">
                                            </div> 
                                            <div class="form-group" id="age4" style="display: none;">
                                                <label for="exampleInputMobile">Child’s Date of Birth</label>
                                                <input name="childage4" id="childage4"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,minSize[10]]" placeholder="Child’s Date of Birth(four)" type="text">
                                                <?php
                                                getDatePicker('childage4');
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" onclick="javascript:return site_registration();" value="Submit"/>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function fnAGe(val)
                {
                    if ($('#chkAge').is(':checked') == true)
                        $('#ageGroup1').show();
                    else
                    {
                        $('#ageGroup1').hide();
                        $('#nochildren').val('');
                        for (i = 1; i <= 4; i++)
                        {
                            $('#age' + i).hide();
                            $('#agen' + i).hide();
                            $('#childname' + i).val('');
                            $('#childage' + i).val('');
                        }
                    }
                }
                function noAge(val)
                {
                    if (val != '')
                    {
                        for (i = 1; i <= 4; i++)
                        {
                            $('#age' + i).hide();
                            $('#agen' + i).hide();
                            $('#childname' + i).val('');
                            $('#childage' + i).val('');
                        }
                        for (i = 1; i <= val; i++)
                        {
                            $('#age' + i).show();
                            $('#agen' + i).show();
                        }
                    }
                    else
                    {
                        for (i = 1; i <= 4; i++)
                        {
                            $('#age' + i).hide();
                            $('#agen' + i).hide();
                            $('#childname' + i).val('');
                            $('#childage' + i).val('');
                        }
                    }
                }
                $(document).ready(function() {
                    $(".reg-msg-error").hide();
                    $(".reg-msg-error").html('');
                    $(".reg-msg-success").hide('');
                    $(".reg-msg-success").html('');
                    $("#reg-form").validationEngine();
                });
                function site_registration()
                {
                    if ($("#reg-form").validationEngine('validate'))
                    {
                        $(".reg-msg-error").hide();
                        $(".reg-msg-error").html('');
                        $(".reg-msg-success").hide('');
                        $(".reg-msg-success").html('');
                        $('#loader-reg-form').show('fast');
                        $("#reg-form").hide('fast');
                        $.ajax({
                            type: "POST",
                            url: "<?php echo Yii::app()->createUrl('site/siteregistration'); ?>",
                            data: $("#reg-form").serialize(),
                            success: function(msg) {
                                if (msg == "duplicate_email")
                                {
                                    $(".reg-msg-error").show();
                                    $(".reg-msg-error").html('');
                                    $(".reg-msg-success").hide('');
                                    $(".reg-msg-success").html('');
                                    $('#loader-reg-form').hide('fast');
                                    $("#reg-form").show('fast');
                                    $(".reg-msg-error").html("Your email is already exist.");
                                    $("#email").focus();
                                    return false;
                                }
                                else if (msg == "email_send")
                                {
                                    $(".reg-msg-error").hide();
                                    $(".reg-msg-error").html('');
                                    $(".reg-msg-success").show('');
                                    $(".reg-msg-success").html('');
                                    $('#loader-reg-form').hide('fast');
                                    $("#reg-form").show('fast');
                                    $(".reg-msg-success").html("Activation link is sent to your email.");
                                    $("#reg-form").trigger('reset');
                                    return false;
                                }
                            }
                        });
                    }
                    return false;
                }
            </script>
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
            $("#msg-error-forgot").hide();
            $("#msg-error-forgot").html('');
            $('#loader-forgot').show('fast');
            $("#forgot-form").hide('fast');
            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('site/siteforgot'); ?>",
                data: {forgotemail: $("#forgotemail").val()},
                success: function(msg) {
                    if (msg == "0") {
                        $("#msg-error-forgot").show('slow');
                        $("#msg-error-forgot").html("Please check your email. Email does not exist in our record.");
                        $('#loader-forgot').hide('fast');
                        $("#forgot-form").show('fast');
                        $("#forgotemail").val('');
                        $("#forgotemail").focus();
                    } else {
                        $("#msg-error-forgot").show('slow');
                        $("#msg-error-forgot").removeClass('alert-danger');
                        $("#msg-error-forgot").addClass('alert-success');
                        $("#msg-error-forgot").html("Please check your inbox. New password has been send to your email.");
                        $('#loader-forgot').hide('fast');
                        $("#forgot-form").show('fast');
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
            $("#msg-error-login").hide();
            $("#msg-error-login").html('');
            $('#loader-login').show('fast');
            $("#login_form").hide('fast');
            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('site/sitelogin'); ?>",
                data: {user_name: $("#user_name").val(), user_password: $("#user_password").val()},
                success: function(msg) {
                    if (msg != "") {
                        document.location.reload(true);
                        return true;
                    } else {
                        $('#loader-login').hide('fast');
                        $("#login_form").show('fast');
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