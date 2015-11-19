<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>

<div class="container">

    <div class="row">
        <h1>GET STARTED WITH ACTIVITYHERE</h1>
        <div class="span-12">


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
    <div class="modal-body">
                    <div class="row reg-msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                    <div class="row reg-msg-success" style="color:green; padding-bottom: 10px; text-align: center;"></div>


                    <div class="panel panel-default">

                        <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">

                                <form method="post" name="reg-form" id="reg-form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input name="firstname" id="firstname" style="outline: medium none;" value=""  class="form-control validate[required]" placeholder="First Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input name="lastname" id="lastname"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Last Name" type="text">
                                    </div>  
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" id="email"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" placeholder="Email" type="email">
                                    </div>   
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Mobile</label>
                                        <input name="mobile" id="mobile"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[number],maxSize[10]]" placeholder="Mobile" type="phone">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleInputMobile">Password</label>
                                        <input name="password" id="password"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Password" type="password">
                                    </div> 
                                    <input type="hidden" name="ctype" value="Customer" checked="checked">
                                    <!--                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Join as</label>&nbsp;&nbsp;&nbsp;                       
                                                            <label for="Customer">  <input type="radio" name="ctype" value="Customer" checked="checked"> Customer</label>&nbsp;&nbsp;&nbsp;
                                                           <label for="Partner">  <input type="radio" name="ctype" value="Partner"> Partner </label>
                                                          </div>    -->

                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Name (one) </label>
                                        <input name="childname1" id="childname1"  style="outline: medium none;" value="" hidefocus="true" class="form-control" placeholder="Child Name(One)" type="text">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Age (one) </label>
                                        <input name="childage1" id="childage1"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[custom[number],maxSize[2]]" placeholder="Child Age(One)" type="text">
                                    </div> 


                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Name (two) </label>
                                        <input name="childname2" id="childname2"  style="outline: medium none;" value="" hidefocus="true" class="form-control" placeholder="Child Name(two)" type="text">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Age (two) </label>
                                        <input name="childage2" id="childage2"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[custom[number],maxSize[2]]" placeholder="Child Age(two)" type="text">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Name (three) </label>
                                        <input name="childname3" id="childname3"  style="outline: medium none;" value="" hidefocus="true" class="form-control" placeholder="Child Name(three)" type="text">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Age (three) </label>
                                        <input name="childage3" id="childage3"  style="outline: medium none;" value="" hidefocus="true" class="form-controlvalidate[custom[number],maxSize[2]]" placeholder="Child Age(three)" type="text">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Name (four) </label>
                                        <input name="childname4" id="childname4"  style="outline: medium none;" value="" hidefocus="true" class="form-control" placeholder="Child Name(four)" type="text">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Child Age (four) </label>
                                        <input name="childage4" id="childage4"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[custom[number],maxSize[2]]" placeholder="Child Age(four)" type="text">
                                    </div>

                                    <input type="submit" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" onclick="javascript:return site_registration();" value="Submit"/>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>        

            
            
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $("#reg-form").validationEngine();

    });
    
    function site_registration()
    {

        if ($("#reg-form").validationEngine('validate'))
        {
            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('site/siteregistration'); ?>",
                data: $("#reg-form").serialize(),
                success: function(msg) {

                    if (msg == "duplicate_email")
                    {
                        $(".reg-msg-error").html("Your email is already exist.");
                        $("#email").focus();
                        return false;
                    }
                    else if (msg == "email_send")
                    {
                        $(".reg-msg-error").html("");
                        $(".reg-msg-success").html("Activation link is sent to your email.");
                        return false;
                    }


                }
            });
        }
        
        return false;
    }
</script>    
