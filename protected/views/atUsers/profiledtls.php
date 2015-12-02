<?php
$baseUrl = Yii::app()->theme->baseUrl;

if (isset($_POST['firstName'])) {
    //Paypal Pro
    $firstName = urlencode($_POST['firstName']);
    $lastName = urlencode($_POST['lastName']);
    $creditCardType = urlencode($_POST['creditCardType']);
    $creditCardNumber = urlencode($_POST['creditCardNumber']);
    $expDateMonth = urlencode($_POST['expDateMonth']);
    $padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);
    $expDateYear = urlencode($_POST['expDateYear']);
    $cvv2Number = urlencode($_POST['cvv2Number']);
    $address1 = urlencode($_POST['address1']);
    $address2 = urlencode($_POST['address2']);
    $city = urlencode($_POST['city']);
    $state = urlencode($_POST['state']);
    $zip = urlencode($_POST['zip']);
    $amount = urlencode($_POST['amount']);
    $currencyCode = "USD";
    $paymentAction = urlencode("Sale");
    $nvpRecurring = '';
    $methodToCall = 'doDirectPayment';
    $nvpstr = '&PAYMENTACTION=' . $paymentAction . '&AMT=' . $amount . '&CREDITCARDTYPE=' . $creditCardType . '&ACCT=' . $creditCardNumber . '&EXPDATE=' . $padDateMonth . $expDateYear . '&CVV2=' . $cvv2Number . '&FIRSTNAME=' . $firstName . '&LASTNAME=' . $lastName . '&STREET=' . $address1 . '&CITY=' . $city . '&STATE=' . $state . '&ZIP=' . $zip . '&COUNTRYCODE=US&CURRENCYCODE=' . $currencyCode . $nvpRecurring;

    $SqlSetting = " SELECT * FROM at_site_settings WHERE id=1";
    $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
    ###------------------------------------------------------####
    Yii::app()->params['siteSettingsConfig'] = $ArraySettingResult[0];

    $paypalPro = new ActivityPaypalPro(Yii::app()->params['siteSettingsConfig']['paypal_pro_user_name'], Yii::app()->params['siteSettingsConfig']['paypal_pro_password'], Yii::app()->params['siteSettingsConfig']['paypal_pro_api_signature'], '', '', (SAND_BOX == 'Yes') ? FALSE : TRUE, FALSE);

    $resArray = $paypalPro->hash_call($methodToCall, $nvpstr);
    $ack = strtoupper($resArray["ACK"]);




    $payment_by = $user_data['id'];
    $payment_status = ($ack == "SUCCESS") ? 'SUCCESSFUL' : 'UNSUCCESSFUL';
    $bank_name = '';
    $check_no = '';
    $pay_by_fname = addslashes($_POST['firstName']);
    $pay_by_lname = addslashes($_POST['lastName']);
    $pay_by_email = $UserInfo['email'];
    $pay_by_address = addslashes($_POST['address1']) . ' , ' . addslashes($_POST['address2']) . ' , ' . addslashes($_POST['city']) . ' , ' . addslashes($_POST['state']) . ' , ' . addslashes($_POST['zip']) . ', USA';
    $pay_by_phone = '';
    $pay_by_mobile = '';
    $pay_by_fax = '';
    $payable_amount = $_POST['amount'];

    $payment_process = 1;
    $course_assoc_id = $model->id;
    $cdate = date("Y-m-d H:i:s");

    if ($ack != "SUCCESS") {

        Yii::app()->user->setFlash('notification', "Payment failed.");
        $membershipId = 0;
    } else {

        Yii::app()->user->setFlash('notification', "Payment Successful.");

        //Insert membership Info Default
        Yii::app()->db->createCommand("INSERT INTO `at_membership_info` (`payment_c_date`, `todate`, `fromdate`, `membership_title`, `user_id`, `membership_note`) VALUES (NOW(), date_add(curdate(),interval 1 month), NOW(), 'Paid', '" . $user_data['id'] . "', 'Paid membership')")->execute();

        $membershipId = Yii::app()->db->getLastInsertID();
    }


    $sql = " INSERT INTO at_payment (cdate,membership_id,payment_by,final_amount,payment_process,payment_status,bank_name,check_no,pay_by_fname,pay_by_lname,pay_by_email,pay_by_address,pay_by_phone,pay_by_mobile,pay_by_fax,payable_amount) VALUES 
                           ('$cdate','$membershipId','" . addslashes($payment_by) . "','" . addslashes($final_amount) . "','" . addslashes($payment_process) . "','" . addslashes($payment_status) . "','" . addslashes($bank_name) . "','" . addslashes($check_no) . "','" . addslashes($pay_by_fname) . "','" . addslashes($pay_by_lname) . "','" . addslashes($pay_by_email) . "','" . addslashes($pay_by_address) . "','" . addslashes($pay_by_phone) . "','" . addslashes($pay_by_mobile) . "','" . addslashes($pay_by_fax) . "','" . $payable_amount . "') ";
    $model->dbConnection->createCommand($sql)->execute();
    $insert_id = Yii::app()->db->getLastInsertID();
    //-------------------------------------------------------------//
    /*
     * UPDATE PEG_PAYMENT FOR RESPONSE TEXT
     */
    $model->dbConnection->createCommand('UPDATE peg_payment SET response_text="' . base64_encode(serialize($resArray)) . '",online_pay_mode="PAYPAL" WHERE id=' . $insert_id)->execute();
    /* ------------------------PEG QUICKBOOK----------------------- */




    //Paypal Pro End   
}
?>

<div id="main" class="site-main" role="main">

    <div class="profile_section"> 

        <div class="container"> 
            <h3 class="hading">Dashboard</h3>

            <div class="col-sm-2 pull-left profile-img"> 
                <?php if($user_data['profilepic']!=''){?> 
                <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $user_data['profilepic'];?>" alt=""> 
                <?php }
                    else {
                        ?>
                <img src="<?php echo $baseUrl; ?>/images/temp/avatar-1.jpg" alt=""> 
                    <?php }?>
                
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
                <?php if (Yii::app()->user->hasFlash('notification')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">�</button>
                        <strong><?php echo Yii::app()->user->getFlash('notification'); ?></strong> </div>
                <?php endif; ?>

                <?php if (Yii::app()->user->hasFlash('successProfile')): ?>
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

                                    <div class="form-group pull-right">    
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

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Membership Details
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <table style="width:100%;" class="list-table" >
                                    <tr style="background-color: #4F81BD !important; color: #FFF !important;">
                                        <td>&nbsp;Sl </td>
                                        <td>Payment Date</td>
                                        <td>From </td>
                                        <td>To </td>
                                        <td>Type</td>
                                        <td>Amount </td>

                                    </tr>
                                    <tbody>
                                        <?php
                                        $usermembership = Yii::app()->db->createCommand("SELECT a.*,b.final_amount FROM at_membership_info as a INNER JOIN at_payment as b ON  a.id=b.membership_id WHERE a.user_id='" . $user_data['id'] . "'")->queryAll();

                                        if (count($usermembership) == 0)
                                            echo "<tr><td colspan=6> No record found </td></tr>";
                                        else {
                                            $i = 1;
                                            foreach ($usermembership as $data) {
                                                ?>
                                                <tr>
                                                    <td>&nbsp;<?php echo $i; ?> </td>
                                                    <td><?php echo getDateFormat($data['payment_c_date']); ?> </td>
                                                    <td><?php echo getDateFormat($data['fromdate']); ?> </td>
                                                    <td><?php echo getDateFormat($data['todate']); ?> </td>
                                                    <td><?php echo $data['membership_title']; ?> 	  </td>
                                                    <td><?php echo $data['final_amount']; ?>$		  </td>
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


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Membership Purchase
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                <?php
                                $membshipvalue = Yii::app()->db->createCommand("SELECT * FROM at_authvalue WHERE id=2")->queryRow();
                                $total = $membshipvalue['value'];
                                ?>

                                <form name="membershipPayment" id="membershipPayment" action="">
                                    <div class="personal_info col-sm-9" style="margin-top: 10px;">
                                        <input type="hidden" size="4" maxlength="7" name="amount" value="<?php echo $total; ?>" />
                                        <table width="845" border="0">
                                            <tr>
                                                <td align=right>First Name:</td>
                                                <td align=left><input type="text" size="30" name="firstName" id="firstName" value="" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Last Name:</td>
                                                <td align=left><input type="text" size="30" name="lastName" id="lastName" value="" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Card Type:</td>
                                                <td align=left>
                                                    <select name="creditCardType" id="creditCardType" class="form-control">
                                                        <option value=Visa selected>Visa</option>
                                                        <option value=MasterCard>MasterCard</option>
                                                        <option value=Discover>Discover</option>
                                                        <option value=Amex>American Express</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=right>Card Number:</td>
                                                <td align=left><input type="text" size="19" maxlength="19" name="creditCardNumber" id="creditCardNumber" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Expiration Date:</td>
                                                <td align=left><p>
                                                        <select name="expDateMonth" id="expDateMonth" class="form-control">
                                                            <option value=1>01</option>
                                                            <option value=2>02</option>
                                                            <option value=3>03</option>
                                                            <option value=4>04</option>
                                                            <option value=5>05</option>
                                                            <option value=6>06</option>
                                                            <option value=7>07</option>
                                                            <option value=8>08</option>
                                                            <option value=9>09</option>
                                                            <option value=10>10</option>
                                                            <option value=11>11</option>
                                                            <option value=12>12</option>
                                                        </select>

                                                        <select name="expDateYear" id="expDateYear" class="form-control">
                                                            <?php
                                                            for ($i = date('Y'); $i <= (date('Y') + 5); $i++) {


                                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </p></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Card Verification Number (CVV / CVC):</td>
                                                <td align=left><input type="text" size="3" maxlength="4" name="cvv2Number" id="cvv2Number" value="" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right><br><b>Billing Address:</b></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Address 1:</td>
                                                <td align=left><input type="text" size="25" name="address1" id="address1" value="" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right>Address 2:</td>
                                                <td align=left><input type="text"  size="25" name="address2" id="address2" class="form-control"/>(optional)</td>
                                            </tr>
                                            <tr>
                                                <td align=right>City:</td>
                                                <td align=left><input type="text" size="25" maxlength="40" name="city" id="city" value="" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td align=right>State:</td>
                                                <td align=left>
                                                    <input type="text" size="25" maxlength="40" name="state" id="state" value="" class="form-control"/>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=right>ZIP Code:</td>
                                                <td align=left><input type="text" size="10" maxlength="10" name="zip" id="zip" value="" class="form-control"/>(5 or 9 digits)</td>
                                            </tr>

                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><input type="submit" id="paypalSubmit" name="paypalSubmit" value="Submit" onclick="javascript:return paypalSubmitACc();" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" /></td>
                                            </tr>
                                        </table>

                                        <script type="text/javascript">

                                            function paypalSubmitACc()
                                            {
                                                if ($('#firstName').val() == '')
                                                {
                                                    alert('Enter First Name');
                                                    return false;
                                                }
                                                if ($('#lastName').val() == '')
                                                {
                                                    alert('Enter Last Name');
                                                    return false;
                                                }
                                                if ($('#creditCardNumber').val() == '')
                                                {
                                                    alert('Enter Card Number');
                                                    return false;
                                                }
                                                if ($('#cvv2Number').val() == '')
                                                {
                                                    alert('Enter CVV Number');
                                                    return false;
                                                }
                                                if ($('#address1').val() == '')
                                                {
                                                    alert('Enter Address');
                                                    return false;
                                                }
                                                if ($('#city').val() == '')
                                                {
                                                    alert('Enter City');
                                                    return false;
                                                }
                                                if ($('#state').val() == '')
                                                {
                                                    alert('Enter State');
                                                    return false;
                                                }
                                                if ($('#zip').val() == '')
                                                {
                                                    alert('Enter Zip Code');
                                                    return false;
                                                }
                                                else
                                                {
                                                    return true;

                                                }
                                            }

                                        </script> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                   Booked Classes
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                
                                <table style="width:100%;" class="list-table" >
                                    <tr style="background-color: #4F81BD !important; color: #FFF !important;">
                                        <td>&nbsp;Sl </td>
                                        <td>Activity Name</td>
                                        <td>Date </td>
                                        <td>Booking Date </td>
                                        <td>Details</td>
                                        

                                    </tr>
                                    <tbody>
                                        <?php
                                        
                                        $usermembership = Yii::app()->db->createCommand("SELECT * FROM activity_booking as a JOIN at_partner_activity as b ON a.partner_activity_id=b.id WHERE a.booked_by='" . $user_data['id'] . "'")->queryAll();

                                        if (count($usermembership) == 0)
                                            echo "<tr><td colspan=6> No record found </td></tr>";
                                        else {
                                            $i = 1;
                                            foreach ($usermembership as $data) {
                                                ?>
                                                <tr>
                                                    <td>&nbsp;<?php echo $i; ?> </td>
                                                    <td>Partner Name</td>
                                                    <td><?php echo getDateFormat($data['activity_date']); ?> </td>
                                                    <td><?php echo getDateFormat($data['created']); ?> </td>
                                                    <td>Details</td>
                                                   
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
                    
                </div>
            </div>

        </div>
    </div>  



</div>    