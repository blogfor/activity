<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Certification Payments </h1>	
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php  
//echo "<pre>";
//print_r($model); 

$course_abbr=  strtoupper($model[0]['course_abbr']);
$cert_no=  strtoupper($model[0]['cert_no']);

$name=  strtoupper($model[0]['firstname']." ".$model[0]['lastname']);
$dob=  date("d-m-Y",strtotime($model[0]['dob']));
$address=strtoupper($model[0]['address']);
if(!empty($model[0]['city']) ) $address.="<br>CITY: ".strtoupper($model[0]['city']);
if(!empty($model[0]['state']) ) $address.="<br>STATE: ".strtoupper($model[0]['state']);
if(!empty($model[0]['zip']) ) $address.="<br>ZIP: ".strtoupper($model[0]['zip']);


$course_fees=$model[0]['course_fees'];

$email=$model[0]['email'];
$mobile=$model[0]['mobile'];
$CDCNO=$model[0]['CDCNO'];
$INDOSNO=$model[0]['INDOSNO'];
$passportno=$model[0]['passportno'];
$certificate=$model[0]['certificate'];
$profession_type=$model[0]['profession_type'];

$cirtificateArr=explode(",",$certificate); 

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-student-registration-form',
        'action'=>Yii::app()->createUrl('//mrCourseRegistration/save_payment'),
		
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

?>



<h4> Student ID: <?php echo $model[0]['id']; ?> </h4>
<input type="hidden" name="student_id" value="<?php echo $model[0]['id']; ?>">
<input type="hidden" name="registration_id" value="<?php echo $_GET['id']; ?>">



<div>
    
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
    
    td.app_label2{
        width: 25%; 
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
    
</style>

<table class="appForm">
    <tr>
        <td class="srl">01</td>    
        <td class="app_label">Name </td>  
        <td class="app_details"><?php echo $name;?> </td>  
    </tr>  
    <tr>
        <td class="srl">02</td>    
        <td class="app_label">Date of Birth </td>  
        <td class="app_details"><?php echo $dob;?> </td>  
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
        <td class="app_label">C.D.C. No. </td>  
        <td class="app_details"><?php echo $CDCNO; ?> </td>  
    </tr>  
    
    <tr>
        <td class="srl">08</td>    
        <td class="app_label">INDOS No. </td>  
        <td class="app_details"><?php echo $INDOSNO; ?> </td>  
    </tr>  
    <tr>
        <td class="srl">09</td>    
        <td class="app_label">Passport No. </td>  
        <td class="app_details"><?php echo $passportno; ?> </td>  
    </tr>
    
   
    
	
    <tr>
        <td class="srl">10</td>    
        <td class="app_label">Route of entry to profession </td>  
        <td class="app_details"><?php echo $profession_type; ?> </td>  
    </tr> 
   
</table>


<u><p style="text-align: center; line-height: 30px; font-weight: bold "> PAYMENT INFORMATION </p></u>


<table class="appForm">                        
    <tr>
        <td class="srl">01</td>  
        <td class="app_label2"> Fees Paid    
        </td>  
        <td style="padding:0px !important;">
            <table class="payments">
                <tr>
                    <td style="width:10%">&nbsp; Amount in </td>
                    <td style="width:15%">&nbsp; Cheque/Draft</td>
                    <td style="width:15%">&nbsp; Cheque/Draft No.</td>
                    <td style="width:25%">&nbsp; Details</td>
                    <td style="width:15%">&nbsp; Receipt No.</td>
                    <td style="width:20%">&nbsp; Date</td>
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
                            <td><input type="text" name="amount[]" class="validate[custom[integer]]"></td>
                            <td>
                                <select name="payment_type[]">
                                    <option>CASH</option>
                                    <option>CHEQUE</option>
                                    <option>DRAFT</option>
                                    <option>PO</option>
                                </select>

                            </td>
                            <td><input type="text" name="chq_no[]" style="width:100%"></td>
                            <td><input type="text" name="details[]" style="width:100%"></td>
                            <td><input type="text" name="receipt_no[]" style="width:100%"></td>
                            <td>
                            <?php
                                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                 'name'=>'entry_date[]',   
                                 'id'=>'entry_date'.$i,   
                                 'value'=>date('d-m-Y'),
                                 'options'=>array(       
                                     'showAnim' => "slideDown",
                                     'changeMonth' => true,
                                     'numberOfMonths' => 1,
                                     'showOn' => "button",
                                     'buttonImageOnly' => false,
                                     'dateFormat' => "dd-mm-yy",                        
                                     'showButtonPanel'=>true,
                                     'minDate'=>-5000,
                                     'maxDate'=>"+2M +5D",
                                 ),
                                 ));
                            ?>
                            
                            
                            </td>
                        </tr>
                    <?php
                    $counter++;                        
                    }
                }
                
                
                ?>

                
            </table> 
            
           
        </td>        
    </tr> 
    
    <tr>
        <td>2</td>
        <td>Total Paid</td>
        <td><?php echo $tot_amt;         
        $rest_amount=($course_fees-$tot_amt);
        if($rest_amount>0) echo "   &nbsp;<font color='red'>Due amount:</font>".$rest_amount;
        ?></td>
    </tr>
    
    <tr>
        <td>3</td>
        <td>Course Amount</td>
        <td><?php echo $course_fees;?></td>
    </tr>
</table>



</div>
<br clear="all" />
<div class="row buttons" style="text-align:center;">
   <input type="submit" name="Save" value="Update Payments">
   
</div>

<?php 
//print_r($model[0]);
//
//$model[0]['course_name']
//$model[0]['level']


?>



<br clear="all" />
<?php $this->endWidget(); ?>

<script>

jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#mr-student-registration-form").validationEngine();
		});
    
</script>
    


