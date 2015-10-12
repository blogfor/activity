<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admission Form</h1>	
    </div>
    <!-- /.col-lg-12 -->    
    <div style="width:100px; float:right;">
     <i class="fa fa-print" style="font-size: 30px; cursor: pointer" title="Print" onclick="printDiv('printForm')"></i>   
    </div> 
</div>




<?php //echo "<pre>"; print_r($model); 

$registered_student_details=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $model[0]['details_during_reg']), true );
//print_r($registered_student_details);

$name=  strtoupper($registered_student_details['firstname']." ".$registered_student_details['lastname']);
$dob=  strtoupper($registered_student_details['dob']);
$address=strtoupper($model[0]['address']);
if(!empty($registered_student_details['city']) ) $address.="<br>CITY: ".strtoupper($registered_student_details['city']);
if(!empty($registered_student_details['state']) ) $address.="<br>STATE: ".strtoupper($registered_student_details['state']);
if(!empty($registered_student_details['zip']) ) $address.="<br>ZIP: ".strtoupper($registered_student_details['zip']);

$email=$registered_student_details['email'];
$mobile=$registered_student_details['mobile'];
$CDCNO=$registered_student_details['CDCNO'];
$last_sign_off=date("d-m-Y",strtotime($model[0]['last_sign_off']));
$last_immigration=date("d-m-Y",strtotime($model[0]['last_immigration']));

$INDOSNO=$registered_student_details['INDOSNO'];
$passportno=$registered_student_details['passportno'];
$certificate=$registered_student_details['certificate'];
$profession_type=$registered_student_details['profession_type'];

$cirtificateArr=explode(",",$certificate); 

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-student-registration-form',
        'action'=>Yii::app()->createUrl('//mrCourseRegistration/save_register'),
		
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

?>



<h4> Student ID: <?php echo $model[0]['id']; ?> </h4>
<input type="hidden" name="student_id" value="<?php echo $model[0]['id']; ?>">

<div id="printForm">
    
    <style>
    .appForm{
        width: 100%;
           
    }
    .appForm td{
        border: 1px #000 solid;
        padding-left: 5px;
        line-height: 20px;
        font-size: 14px;
        vertical-align:top;
    }
    td.srl{
        width: 30px;
    }
    td.app_label{
        width: 40%; 
    }

#shadowing_login {
    background-color: #393838;
    display: none;
    height: 100%;
    left: 0;
    opacity: 0.5;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
#box_form_login{
    background-color: white;
    border: 1px solid black;
    display: none;
    left: 13%;
    margin: 0;
    overflow: auto;
    padding: 48px 30px 10px;
    position: absolute;
    top: 100px;
    width: 75%;
	height:500px;
    z-index: 1001;
}
#boxtitle_login {
  background-color: #124587;
  border-bottom: 4px solid #D9DEE5;
  color: white;
  font-size: 14px;
  font-weight: bold;
  line-height: 14px;
  left: 0;
  margin: 0;
  padding: 9px;
  position: absolute;
  text-align: center;
  top: 0;
  width: 100%;
}
p .small{
    font-size: 10px;
    line-height: 10px;
    padding: 0;
    margin: 0;
}

.payments{
        width:100%;        
    }
    .payments td{
        padding:0 !important;
    }
    
    .hasDatepicker{
        width:80px;
    }
     td.app_label2{
        width: 12%; 
    }
</style>


<table style="width:100%" cellpadding="0" cellspaceing="0">
    <tr>
        <td style="width:70%; font-size: 14px; line-height: 14px;">
            <h4> MARINE EDUCATION CHARITABLE TRUST</h4>
            <p class="small">Professional Development Centre for Marine Officers</p>
            <p class="small">321B, Diamond Harbour Road, Kolkata -700034</p>
            <p class="small">Telephone:2446 1734 / 2399 5100 Fax : 23995100</p>
            <p class="small">Email:mectcalcutta@gmail.com & mectkolkata@gmail.com</p>
            <p class="small">Web: www.mectkolkata.com</p>
        </td>
        <td style="text-align:right">            		
            <?php if(isset($model[0]['attach_upload_photo']) && $model[0]['attach_upload_photo']!=".png"){ ?>
                <img src="<?php echo Yii::app()->baseUrl;?>/images/<?php echo $model[0]['attach_upload_photo']; ?>" height="150" id="profilePic"/>
            <?php
            }
            ?>	
        </td>
        
    </tr>
</table>
<br>
<table class="appForm">
    <tr>
        <td class="srl">01</td>    
        <td class="app_label">Name </td>  
        <td class="app_details"><?php echo $name;?> </td>  
    </tr>  
    <tr>
        <td class="srl">02</td>    
        <td class="app_label">Date of Birth </td>  
        <td class="app_details"><?php echo  date("d-m-Y",strtotime($dob));?> </td>  
    </tr>    
    <tr>
        <td class="srl">03</td>    
        <td class="app_label">Address </td>  
        <td class="app_details"><?php echo $address;?> </td>  
    </tr>   
    <tr>
        <td class="srl">04</td>    
        <td class="app_label">Email </td>  
        <td class="app_details"><?php echo $email;?> </td>  
    </tr>  
    <tr>
        <td class="srl">05</td>    
        <td class="app_label">Telephone/Mobile No. </td>  
        <td class="app_details"><?php echo $mobile;?> </td>  
    </tr>  
    
    <tr>
        <td class="srl">06</td>    
        <td class="app_label">Course applied </td>  
        <td class="app_details">
        <?php echo $model[0]['course_name']; ?>
        ( <?php echo date("d-m-Y",strtotime($model[0]['start_date']))." To ".date("d-m-Y",strtotime($model[0]['end_date'])); ?> ) 
        <div id="classesDiv"></div>  
        </td>  
    </tr>  
    
    <tr>
        <td class="srl">07</td>    
        <td class="app_label">C.D.C. No.<span style="float:right;"> <?php echo $CDCNO; ?>&nbsp;&nbsp;</span></td>  
        <td class="app_details">Last sign off &nbsp;<?php echo $last_sign_off; ?></td>  
    </tr>  
    
    <tr>
        <td class="srl">08</td>    
        <td class="app_label">INDOS No. </td>  
        <td class="app_details"><?php echo $INDOSNO; ?> </td>  
    </tr>  
    <tr>
        <td class="srl">09</td>    
        <td class="app_label">Passport No.<span style="float:right;"> <?php echo $passportno; ?>&nbsp;&nbsp;</span></td>  
        <td class="app_details">Last immigration &nbsp; <?php echo $last_immigration; ?> </td>  
    </tr>
    
    <tr>
        <td class="srl">10</td>    
        <td class="app_label"> Certificate held 
            <table style="width: 100px; float: right; border:0">
                <tr><td>No.</td></tr>   
                <tr><td>Grade</td></tr>
                <tr><td>Where issued</td></tr>
            </table>
        </td>  
        <td class="app_details" style="padding-left: 0px !important;" > 
            <table style="width: 100%; border:0">
                <tr><td><?php echo $model[0]['cirtificate_no'];?></td></tr>   
                <tr><td><?php echo $model[0]['cirtificate_grade'];?></td></tr>
                <tr><td><?php echo $model[0]['cirtificate_issued_from'];?></td></tr>
            </table>          
        </td>  
    </tr> 
    
	
    <tr>
        <td class="srl">11</td>    
        <td class="app_label">Route of entry to profession </td>  
        <td class="app_details"><?php echo $profession_type; ?> </td>  
    </tr> 
    <tr>
        <td class="srl">12</td>    
        <td class="app_label">DECLARATION BY STUDENT </td>  
        <td class="app_details" style="font-size:12px; line-height: 14px;">I hereby declare that the information given above is correct. 
            I have read information accompanying the application form. 
            I have also read the terms and conditions stated in the back of this application and 
            i agreed to observe the same.  </td>  
    </tr> 
        <tr>
            <td class="srl" style="height:50px;">13</td>    
        <td class="app_label" style=" line-height:50px; vertical-align: bottom !important;">Date _ _ _ _ _ _ _ _ _ </td>  
        <td class="app_details" style="vertical-align: bottom !important; text-align: center">(Signature of Student) </td>  
    </tr> 
    
</table>


<u><p style="text-align: center; line-height: 30px; font-weight: bold "> FOR OFFICE USE</p></u>

<table class="appForm">
    <tr>
        <td class="srl">01</td>  
        <td class="app_label"> Attachments 
		

		
		</td> 
        <td style="padding-left: 0px;"> 
            <table style="width: 100%; padding: 0; margin: 0; ">
                <tr>
                    <td> 2Photographs</td>
                    <td class="srl" style="text-align: center"> <?php if($model[0]['attach_photo']=="Y") echo '<i class="fa fa-check"></i>'; else '<i class="fa fa-times"></i>'; ?> </td>
                    <td> Copy of Passport </td>
                    <td class="srl" style="text-align: center"> <?php if($model[0]['attach_passport']=="Y") echo '<i class="fa fa-check"></i>'; else '<i class="fa fa-times"></i>'; ?> </td>
                </tr>
                <tr>
                    <td> Copy of CDC </td>
                    <td class="srl" style="text-align: center"><?php if($model[0]['attach_cdc']=="Y") echo '<i class="fa fa-check"></i>'; else '<i class="fa fa-times"></i>'; ?> </td>
                    <td> Copy of COC </td>
                    <td class="srl" style="text-align: center"><?php if($model[0]['attach_coc']=="Y") echo '<i class="fa fa-check"></i>'; else '<i class="fa fa-times"></i>'; ?> </td>
                </tr>  
                <tr>
                    <td>Others/INDOS</td>
                    <td class="srl" style="text-align: center"><?php if($model[0]['attach_indos']=="Y") echo '<i class="fa fa-check"></i>'; else '<i class="fa fa-times"></i>'; ?> </td>
                    <td colspan="2"> </td>                   
                </tr>
            </table>
        
        </td>
    </tr>
    </table>

    <table class="appForm">                        
    <tr>
        <td class="srl">01</td>  
        <td class="app_label2"> Fees Paid    
        </td>  
        <td style="padding:0px !important;">
            <table class="payments">
                <tr>
                    <td style="width:15%">&nbsp; Amount in </td>
                    <td style="width:17%">&nbsp; Cheque/Draft</td>
                    <td style="width:18%">&nbsp; Chq./Draft No.</td>
                    <td style="width:20%">&nbsp; Details</td>
                    <td style="width:15%">&nbsp; Receipt No.</td>
                    <td style="width:15%">&nbsp; Date</td>
                </tr>
                
                <?php
                 $counter=0;
                 $tot_amt=0;
                if(count($payments)>0){                   
                    for($i=0; $i<=count($payments)-1; $i++){
                    echo ' <tr>
                    <td>&nbsp; '.$payments[$i]['amount'].' </td>
                    <td>&nbsp; '.$payments[$i]['payment_type'].'</td>
                    <td>&nbsp; '.$payments[$i]['chq_no'].'</td>
                    <td>&nbsp; '.$payments[$i]['details'].'</td>
                    <td>&nbsp; '.$payments[$i]['receipt_no'].'</td>
                    <td>&nbsp; '.date("d-m-Y",strtotime($payments[$i]['entry_date'])).'</td>
                    </tr>';
                    
                    $tot_amt=$tot_amt+$payments[$i]['amount'];
                    $counter++;
                        
                    }
                }
                
                
                if($counter<3){    
                 for($i=0; $i<=(3-$counter); $i++){
                    ?>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php
                    $counter++;                        
                    }
                }
                
                
                ?>

                
            </table> 
            
           
        </td>        
    </tr> 
            
<!--    <tr>
        <td class="srl">02</td>  
        <td class="app_label"> Fees Paid    
        </td>  
        <td style="padding: 10px 0 0 10px;">
            <p><span style="width: 100px; display: block; float: left"> Amount:</span>
                <?php echo $model[0]['cash_amount']; ?>                
            </p>
            <p><span style="width: 100px; display: block; float: left"> Payment Type </span>
                <?php echo $model[0]['other_pay_type']; ?> &nbsp;
            </p>
            
            <p><span style="width: 100px; display: block; float: left"> Cheque/Draft: </span>
                 
                <?php if(round($model[0]['chq_amount'])>0) echo $model[0]['chq_amount']; ?> &nbsp;&nbsp;&nbsp;                
                No. <?php if(round($model[0]['chq_amount'])>0) echo $model[0]['chq_no']; ?> &nbsp;                
                <br>
                <span style="width: 100px; display: block; float: left"> &nbsp;</span>
                <?php if(round($model[0]['chq_amount'])>0) echo $model[0]['chq_details']; ?>  &nbsp;  
            </p>
            <p><span style="width: 100px; display: block; float: left"> Receipt NO:</span>                 
                <?php echo $model[0]['recept_no']; ?>
            </p>                       
        </td>        
    </tr>    -->
</table>
<p style="text-align:right"> <b> Admission accepted and seat reserved </b></p>
</div>
<br clear="all" />
<div class="row buttons" style="text-align:center;">
    <i class="fa fa-print"></i>
    <input type="button" value="Print Form" onclick="printDiv('printForm')" />
</div>





 <br clear="all" />

<?php $this->endWidget(); ?>

<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link href="<?php echo Yii::app()->baseUrl;?>/css/validationEngine.jquery.css" rel="stylesheet">
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
