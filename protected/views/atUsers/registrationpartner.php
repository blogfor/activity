<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>

<div class="container">

    <div class="col-lg-8 col-md-8 col-sm-12 content-box content-center ">
        <h1>BECOME A PARTNER</h1>
        
        
        <div class="content-center" >


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



            <div>
                <div class="row reg-msg-error-partner" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                <div class="row reg-msg-success-partner" style="color:green; padding-bottom: 10px; text-align: center;"></div>


                <div class="panel panel-default">

                    <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                            <form method="post" name="reg-form-partner" id="reg-form-partner" enctype="multipart/form-data">
                                <div class="form-group">
<!--                                    <label for="exampleInputEmail1">First Name</label>-->
                                    <input name="firstname" id="firstname" style="outline: medium none;" value=""  class="form-control validate[required]" placeholder="First Name" type="text">
                                </div>
                                <div class="form-group">
<!--                                    <label for="exampleInputEmail1">Last Name</label>-->
                                    <input name="lastname" id="lastname"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Last Name" type="text">
                                </div>  
                                <div class="form-group">
<!--                                    <label for="exampleInputEmail1">Email</label>-->
                                    <input name="email" id="email"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" placeholder="Email" type="email">
                                </div>   
                                <div class="form-group">
<!--                                    <label for="exampleInputMobile">Mobile</label>-->
                                    <input name="mobile" id="mobile"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[number],maxSize[10]]" placeholder="Mobile" type="phone">
                                </div> 

                                <div class="form-group">
<!--                                    <label for="exampleInputMobile">Password</label>-->
                                    <input name="password" id="password"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Password" type="password">
                                </div> 

                                <div class="form-group">
<!--                                    <label for="exampleInputEmail1">Address</label>-->
                                    <textarea name="address1" id="address1"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Address"></textarea>
                                </div>  

                                <div class="form-group">
<!--                                    <label for="exampleInputEmail1">Activities</label>-->
                                    <select name="activities[]" id="activities"  style="outline: medium none;" hidefocus="true" class="form-control validate[required]" multiple="true">
                                        <?php
                                        
                                        $QueryActivity = Yii::app()->db->createCommand('SELECT * FROM at_activity')->queryAll();
                                        foreach($QueryActivity as $act)
                                        {
                                            echo '<option value="'.$act['id'].'">'.$act['activity_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div> 
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Logo</label>
                                    <input type="file" name="logo" id="logo"  placeholder="Logo" style="outline: medium none;" class="form-control validate[required]" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Add Image</label>
                                    <input type="file" name="image" id="image"  style="outline: medium none;" class="form-control validate[required]" />
                                
                                    <input type="hidden" name="ctype" value="Partner" checked="checked">
                                    <input type="submit" class="" style="background-color: #f79646; padding: 5px 10px;" padding: 5px 10px;" value="Submit"/>
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
    $(document).ready(function() {
        $("#reg-form-partner").validationEngine();

    });
</script>    
