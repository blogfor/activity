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
 <?php require_once('tpl_navigation.php') ?>
        
    </header>
    <!--/ Header -->
    
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

//    jQuery(document).ready(function(){
//        // binds form submission and fields to the validation engine
//        $("#login_form").validationEngine();
//    });
</script>