<?php
$baseUrl = Yii::app()->theme->baseUrl;
//print_r($user_selected_activity);
?>

<style>
    .list-table td{
        line-height:35px;
    }

    .list-table tbody td{
        border-top:1px #ccc solid;
    }
    .list-table tbody tr:hover{
        background-color:#f1f1f1;

    }
</style>

<div id="main" class="site-main" role="main">




    <div class="profile_section"> 

        <div class="container"> 
            <h3 class="hading">Dashboard</h3>

            <div class="col-sm-2 pull-left profile-img"> 

                <?php
                $partnerActivity = Yii::app()->db->createCommand("SELECT * FROM at_partner_details WHERE id='" . $user_data['id'] . "'")->queryRow();
                ?>
                <?php if (trim($partnerActivity['logo']) == '') { ?>
                    <img src="<?php echo $baseUrl; ?>/images/temp/avatar-1.jpg" alt=""> 
                <?php
                } else {
                    ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $partnerActivity['logo']; ?>" class="image"/> 
                    <?php
                }
                ?>

                <h5> <?php echo strtoupper($user_data['firstname'] . " " . $user_data['lastname']); ?> </h5>
               <h6><a href="javascript:changeProfilePic();">Change Profile Picture</a></h6>

                <form name="changeProfilePic" id="changeProfilePic" action="<?php echo Yii::app()->createUrl('/atUsers/updateprofilepic'); ?>" enctype="multipart/form-data" method="post" >
                    <input type="file" name="profilepic" id="profilepic" class="validate[required]"/>
                    <input type="submit" value="Change" class="btn btn-default payment-buttam"/>
                </form>
                
                                <script>
                                    function changeProfilePic()
                                    {
                                        $('#changeProfilePic').show();
                                    }
                                    $(document).ready(function() {
                                        // binds form submission and fields to the validation engine
                                        $("#changeProfilePic").validationEngine();
                                         $("#changeProfilePic").hide();
                                    });
                                </script>



            </div>

            <div class="col-sm-10 pull-right">
                <?php if(Yii::app()->user->hasFlash('successProfile')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successProfile'); ?>
    </div>
<?php endif; ?>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Personal Details
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <form method="post" name="Profiledtls" id="Profiledtls" action="<?php echo Yii::app()->createUrl('/atUsers/updateprofile'); ?>">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control validate[required]" id="firstname" name="firstname" placeholder="first name" value="<?php echo $user_data['firstname']; ?>">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control validate[required]" id="lastname" name="lastname" placeholder="last name" value="<?php echo $user_data['lastname']; ?>">
                                    </div>


                                    <div class="form-group col-lg-10">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control validate[required]" id="address1" name="address1" value="<?php echo $user_data['address1']; ?>" placeholder="address">
                                    </div>


                                    <div class="form-group col-lg-2">
                                        <label for="exampleInputPassword1">Zip Code</label>
                                        <input type="text" class="form-control validate[required,custom[number],minSize[5],maxSize[10]]" id="zipcode" name="zipcode"  value="<?php echo $user_data['zipcode']; ?>" placeholder="Zipcode">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control validate[required,custom[email]] " id="email" name="email" value="<?php echo $user_data['email']; ?>" placeholder="email">
                                    </div>

                                    <div class="form-group col-lg-6">

                                        <label for="exampleInputEmail1">Office Phone</label>
                                        <input type="text" class="form-control validate[required,custom[number],minSize[10],maxSize[10]]" id="office_phone" name="office_phone" placeholder="office phone" value="<?php echo $user_data['office_phone']; ?>">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Home Phone</label>
                                        <input type="text" class="form-control validate[required,custom[number],minSize[10],maxSize[10]]" id="home_phone" name="home_phone" placeholder="home phone" value="<?php echo $user_data['home_phone']; ?>">
                                    </div>  

                                    <div class="form-group col-lg-12 pull-right">  
                                        <button type="submit" class="btn btn-default payment-buttam" style="float: right;">Update</button>
                                    </div>
                                </form>


                                <script>
                                    $(document).ready(function() {
                                        // binds form submission and fields to the validation engine
                                        $("#Profiledtls").validationEngine();
                                    });
                                </script>



                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Account Details
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <form method="post" name="Profileacdtls" id="Profileacdtls" action="<?php echo Yii::app()->createUrl('/atUsers/updateprofileaccount'); ?>">
                                    <!--                                    <div class="form-group">
                                                                            <label for="exampleInputEmail1">User Name</label>
                                                                            <input type="text" class="form-control validate[required]" id="username" name="username" placeholder="user name" value="<?php echo $user_data['username']; ?>" >
                                                                        </div>-->

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Password </label>
                                        <input type="password" class="form-control validate[required]" id="password" name="password" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Conform Password</label>
                                        <input type="password" class="form-control validate[required,equals[password]]" id="con_password" name="con_password" placeholder="conform password">
                                    </div>

                                    <div class="form-group col-lg-12 pull-right">    
                                        <input type="submit" class="btn btn-default payment-buttam" value="Update" style="float:right;">
                                    </div>
                                </form>
                                <script>
                                    $(document).ready(function() {
                                        // binds form submission and fields to the validation engine
                                        $("#Profileacdtls").validationEngine();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 


    <div class="container"> 
<?php if (Yii::app()->user->hasFlash('successAddActivity')): ?>
            <div id="statusMsg">
                <div class="alert alert-success">
    <?php echo Yii::app()->user->getFlash('successAddActivity'); ?>
                </div>
            </div>
<?php endif; ?>

        <?php if (Yii::app()->user->hasFlash('successUpdateActivity')): ?>
            <div id="statusMsg">
                <div class="alert alert-success">
    <?php echo Yii::app()->user->getFlash('successUpdateActivity'); ?>
                </div>
            </div>
<?php endif; ?>

        <?php if (Yii::app()->user->hasFlash('errorAddActivity')): ?>
            <div id="statusMsg">
                <div class="alert alert-error">
    <?php echo Yii::app()->user->getFlash('errorAddActivity'); ?>
                </div>
            </div>
<?php endif; ?>
    </div>



    <div class="activity_section">

        <div class="container"> 
            <h4 class="hading">My Activity
                <a class="btn btn-transparent login" href="#" hidefocus="true" data-toggle="modal" data-target="#myActivityform" style="outline: medium none; padding: 12px 0px 0px 20px;">
                    <span>Add Activity</span>
                </a>

            </h4> 

            <div class="panel panel-default">	 
                <table style="width:100%;" class="list-table" >
                    <tr style="background-color: #4F81BD !important; color: #FFF !important;">
                        <td>&nbsp;Sl </td>
                        <td>Activity Type</td>
                        <td>Date </td>
                        <td>Time </td>
                        <td>Location </td>
                        <td>Price </td>
                        <td>Action </td>
                    </tr>
                    <tbody>
<?php
if (count($activity_data) == 0)
    echo "<tr><td colspan=6> No activity is enlisted </td></tr>";
else {
    $i = 1;
    foreach ($activity_data as $data) {
        ?>
                                <tr>
                                    <td>&nbsp;<?php echo $i; ?> </td>
                                    <td><?php echo $data['activity_name']; ?> </td>
                                    <td><?php echo $data['activity_date']; ?> </td>
                                    <td><?php echo $data['activity_time']; ?> </td>
                                    <td><?php echo $data['address']; ?> 	  </td>
                                    <td><?php echo $data['price']; ?>$		  </td>
                                    <td>	

                                        <i class="fa fa-pencil-square-o"></i>
                                        &nbsp;
                                        <a href="javascript:void(0);" title="Delete Activity" onclick="delete_activity(<?php echo $data['aid']; ?>);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>			
        <?php
        $i++;
    }
}
?>	
                    </tbody>	
                </table>
            </div>

        </div>
    </div>

    <br clear="all">

</div> 



<!--ACTIVITY ADD MODAL BOX-->
<div id="myActivityform" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" id="lognform">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                <h4 class="modal-title">Create Activity</h4>
            </div>
            <div class="modal-body">
                <div class="row msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                <div class="panel panel-default">
                    <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <form name="activity_form" id="activity_form" method="post" action="<?php echo Yii::app()->createUrl('atUsers/addpartneractivity'); ?>">

                                <div class="form-group  col-lg-12">
                                    <label for="exampleInputEmail1">Activity Type</label>

                                    <select class="form-control" name="activity_type_id">                                                                       
<?php
if (count($user_selected_activity) > 0) {
    foreach ($user_selected_activity as $activity):
        ?>                                                                        
                                                <option value="<?php echo $activity['id']; ?>"><?php echo $activity['activity_name']; ?></option>
                                                <?php
                                            endforeach;
                                        }
                                        ?>
                                    </select>									
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1">Activity Date</label>
                                    <input name="activity_date" id="activity_date" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Activity Date" type="text">

<?php
getDatePicker('activity_date');
?>
                                </div>    

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1">Activity Time</label>
                                    <input name="activity_time" id="activity_time" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Eg: 10-11AM " type="text">
                                </div> 

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1"></label>
                                    is Paid?<input type="checkbox" name="is_paid" id="is_paid" value="Y" onclick="display_fees(this);" >
                                </div> 

                                <div class="form-group col-lg-6 fees-text" style="display:none;" >
                                    <label for="exampleInputEmail1">Fees($)</label>
                                    <input name="price" id="price" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Price" type="text">
                                </div> 
                                <div class="form-group col-lg-12">
                                    <label for="exampleInputEmail1">Age Range</label>
                                    <input type="text" name="age_range" id="age_range" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Eg: 10-12 Yrs" >
                                </div>  

                                <div class="form-group col-lg-12">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea name="address" id="address" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Activity Addesss" ></textarea>
                                </div>  


                                <div class="form-group col-lg-12">
                                    <input type="submit" class="btn btn-default search_submit" style="background-color: rgb(221, 221, 221); padding: 5px 10px;" value="Submit"/> &nbsp;
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>            
    </div>
</div>



<!--ACTIVITY ADD MODAL BOX-->
<div id="myActivityUpdateform" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" id="lognform">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                <h4 class="modal-title">Update Activity</h4>
            </div>
            <div class="modal-body">
                <div class="row msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                <div class="panel panel-default">
                    <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <form name="activity_form" id="activity_form" method="post" action="<?php echo Yii::app()->createUrl('atUsers/addpartneractivity'); ?>">

                                <div class="form-group  col-lg-12">
                                    <label for="exampleInputEmail1">Activity Type</label>

                                    <select class="form-control" name="activity_type_id">                                                                       
<?php
if (count($user_selected_activity) > 0) {
    foreach ($user_selected_activity as $activity):
        ?>                                                                        
                                                <option value="<?php echo $activity['id']; ?>"><?php echo $activity['activity_name']; ?></option>
                                                <?php
                                            endforeach;
                                        }
                                        ?>
                                    </select>									
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1">Activity Date</label>
                                    <input name="activity_date" id="activity_date" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Activity Date" type="text">
                                </div>    

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1">Activity Time</label>
                                    <input name="activity_time" id="activity_time" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Eg: 10-11AM " type="text">
                                </div> 

                                <div class="form-group col-lg-6">
                                    <label for="exampleInputEmail1"></label>
                                    is Paid?<input type="checkbox" name="is_paid" id="is_paid" value="Y" onclick="display_fees(this);" >
                                </div> 

                                <div class="form-group col-lg-6 fees-text" style="display:none;" >
                                    <label for="exampleInputEmail1">Fees($)</label>
                                    <input name="price" id="price" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Price" type="text">
                                </div> 
                                <div class="form-group col-lg-12">
                                    <label for="exampleInputEmail1">Age Range</label>
                                    <input type="text" name="age_range" id="age_range" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Eg: 10-12 Yrs" >
                                </div>  

                                <div class="form-group col-lg-12">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea name="address" id="address" style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" id="exampleInputEmail1" placeholder="Activity Addesss" ></textarea>
                                </div>  


                                <div class="form-group col-lg-12">
                                    <input type="submit" class="btn btn-default search_submit" style="background-color: rgb(221, 221, 221); padding: 5px 10px;" value="Submit"/> &nbsp;
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>            
    </div>
</div>


<script>
    function display_fees(chkobj) {
        if ($(chkobj).is(':checked') == true) {
            $(".fees-text").show();
        }
        else {
            $(".fees-text").hide();
            $("#price").val("");
        }
    }
    $(document).ready(function() {

        $("#activity_form").validationEngine();
    });



    function delete_activity(aid) {

        var r = confirm("Are you sure to delete this activity");
        if (r == true) {
            window.location.href = "<?php echo Yii::app()->createUrl('/atUsers/activitydelete'); ?>/" + aid;
        }

    }
</script>

