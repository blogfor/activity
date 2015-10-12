
<?php  //print_r($model); 
$name=  strtoupper($model[0]['firstname']." ".$model[0]['lastname']);
$dob=  strtoupper($model[0]['dob']);
$address=strtoupper($model[0]['address']);
if(!empty($model[0]['city']) ) $address.="<br>CITY: ".strtoupper($model[0]['city']);
if(!empty($model[0]['state']) ) $address.="<br>STATE: ".strtoupper($model[0]['state']);
if(!empty($model[0]['zip']) ) $address.="<br>ZIP: ".strtoupper($model[0]['zip']);

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
        'action'=>Yii::app()->createUrl('//mrCourseRegistration/save_register'),
		
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

?>

 <style>
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
        width: 23%; 
    }
</style>

<h4> Student ID: <?php echo $model[0]['id']; ?> </h4>
<input type="hidden" name="student_id" value="<?php echo $model[0]['id']; ?>">
<table class="appForm">
    <tr>
        <td class="srl">01</td>    
        <td class="app_label">Name </td>  
        <td class="app_details"><?php echo $name;?> </td>  
    </tr>  
    <tr>
        <td class="srl">02</td>    
        <td class="app_label">Date of Birth </td>  
        <td class="app_details"><?php echo date("d-m-Y",strtotime($dob));?> </td>  
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
        <?php echo CHtml::dropDownList('course_id','',CHtml::listData(MrCourse::model()->findAll('status="Y"'),'id', 'course_name'),array('empty'=>'--- Select Course ---','onchange'=>'javascript:showClases();','class'=>'validate[required]'));
        ?>
         <div id="classesDiv"></div>  
        </td>  
    </tr>  
    
    <tr>
        <td class="srl">07</td>    
        <td class="app_label">C.D.C. No. <span style="float:right"><?php echo $CDCNO; ?>&nbsp;&nbsp;</span></td>  
        <td class="app_details">Last sign off  
        <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
             'name'=>'last_sign_off',    
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
                 'maxDate'=>"+1M +5D",
             ),
             ));
        ?>
        </td>  
    </tr>  
    
    <tr>
        <td class="srl">08</td>    
        <td class="app_label">INDOS No. </td>  
        <td class="app_details"><?php echo $INDOSNO; ?> </td>  
    </tr>  
    <tr>
        <td class="srl">09</td>    
        <td class="app_label">Passport No. <span style="float:right"><?php echo $passportno; ?>&nbsp;&nbsp;</span></td>  
        <td class="app_details">Last immigration 
        <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
             'name'=>'last_immigration',    
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
                 'maxDate'=>"+1M +5D",
             ),
             ));
        ?>
        </td>  
    </tr>
    
 
	
    <tr>
        <td class="srl">11</td>    
        <td class="app_label"> Route of entry to profession </td>  
        <td class="app_details"><?php echo $profession_type; ?> </td>  
    </tr> 
    
</table>


<u><p style="text-align: center; line-height: 30px; font-weight: bold "> FOR OFFICE USE</p></u>

<table class="appForm">
    <tr>
        <td class="srl">01</td>  
        <td class="app_label"> Attachments 
		
		<div style="width:100px; float:right">
		
		<?php if(isset(Yii::app()->session['student_pic'])){ ?>
			<img src="<?php echo Yii::app()->baseUrl;?>/images/<?php echo Yii::app()->session['student_pic']; ?>.png" height="80" id="profilePic"/>
		<?php }else{ ?>
			<img src="<?php echo Yii::app()->baseUrl;?>/images/add_user.png" height="80" id="profilePic"/>
		<?php 
		}
		?>
		<div onClick="openbox_login('Upload Picture',1);">Attach Image</div>
		</div>
		
		</td> 
        <td style="padding-left: 0px;"> 
            <table style="width: 100%; padding: 0; margin: 0; ">
                <tr>
                    <td> 2Photographs</td>
                    <td class="srl" style="text-align: center"> <input type="checkbox" name="attach_photo"> </td>
                    <td> Copy of Passport </td>
                    <td class="srl" style="text-align: center"> <input type="checkbox" name="attach_passport"> </td>
                </tr>
                <tr>
                    <td> Copy of CDC </td>
                    <td class="srl" style="text-align: center"> <input type="checkbox" name="attach_cdc"> </td>
                    <td> Copy of COC </td>
                    <td class="srl" style="text-align: center"> <input type="checkbox" name="attach_coc"> </td>
                </tr>  
                <tr>
                    <td>Others/INDOS</td>
                    <td class="srl" style="text-align: center"> <input type="checkbox" name="attach_indos"> </td>
                    <td colspan="2"> </td>                   
                </tr>
            </table>
        
        </td>
    </tr>
</table>



<table class="appForm">
     <tr>
        <td class="srl">02</td>  
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
               
                
                if($counter<3){    
                 for($i=0; $i<=2; $i++){
                    ?>
                        <tr>
                            <td><input type="text" name="amount[]"></td>
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
                        
<!--    <tr>
        <td class="srl">02</td>  
        <td class="app_label"> Fees Paid</td>  
        <td style="padding: 10px 0 0 10px;">
            <p><span style="width: 100px; display: block; float: left"> Amount:</span> 
                <input type="text" name="cash_amount" placeholder="Cash Amount"> </p>
            <p><span style="width: 100px; display: block; float: left"> Payment Type </span>
                <select name="other_pay_type" onchange="payment_type(this.value);">        
                    <option value=""> Select</option>
                    <option value="CHQ"> CHQ</option>
                    <option value="DRAFT"> DRAFT</option> 
                    <option value="PO"> PO</option> 
                </select>
            </p>
            <p><span style="width: 100px; display: block; float: left"> Cheque/Draft: </span>
                <input type="text" placeholder="Chq/Drft Amount" name="chq_amount" id="chq_amount">&nbsp;
                <input type="text" placeholder="Chq/Drft No." name="chq_no" id="chq_no"> <br>
                <span style="width: 100px; display: block; float: left"> &nbsp;</span>
                <input type="text" placeholder="Details" name="chq_details" id="chq_details" style="width: 400px; margin-top: 5px;"> 
            
            </p>
            <p><span style="width: 100px; display: block; float: left"> Receipt NO:</span> 
                <input type="text" name="recept_no"> </p>                       
        </td>        
    </tr>    -->
</table>
<br clear="all" />
<div class="row buttons" style="text-align:center;">
	<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	<input type="submit" value="Submit Registration" />
</div>


<div id="shadowing_login"></div>
<div id="box_form_login">
<span id="boxtitle_login"></span>
<iframe src="<?php echo Yii::app()->createUrl('mrStudentspic/upload'); ?>" style="border:0; padding:0; margin:0; width:100%; height:550px;"></iframe>
</div>


 <br clear="all" />

<?php $this->endWidget(); ?>

<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link href="<?php echo Yii::app()->baseUrl;?>/css/validationEngine.jquery.css" rel="stylesheet">



 
<script type="text/javascript">
    function showClases()
    {
        $.ajax({
			type: "POST",
			url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/classes'); ?>",
			data: "courseid=" + $('#course_id').val(),
			success: function(msg) {
				$('#classesDiv').empty();
				$('#classesDiv').html(msg);
			}
		});
    }
	
	function payment_type(val){
		
		if(val!="")
		{
			$("#chq_amount").addClass("validate[required]");
			$("#chq_no").addClass("validate[required]");
			$("#chq_details").addClass("validate[required]");		
		}
		else{
			$("#chq_amount").removeClass("validate[required]");
			$("#chq_no").removeClass("validate[required]");
			$("#chq_details").removeClass("validate[required]");
			$(".chq_amountformError").hide();
			$(".chq_noformError").hide();
			$(".chq_detailsformError").hide();
		}
	
	}
	

	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#mr-student-registration-form").validationEngine();
		
		$('.shadowing_login').on('click', function(e) {
       	closebox_login();
    	});
		
		
	});
	
function setPic(pic){

var links="<?php echo Yii::app()->baseUrl;?>/images/"+pic;
$("#profilePic").attr("src",links);
}

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}



// Login Popup
function openbox_login(formtitle,fadin)
{
 
  var box = document.getElementById('box_form_login'); 
  document.getElementById('shadowing_login').style.display='block';

  var btitle = document.getElementById('boxtitle_login');
  btitle.innerHTML = formtitle;

  
  if(fadin)
  {
	 gradient("box_form_login", 0);
	 fadein("box_form_login");
  }
  else
  { 	
    box.style.display='block';
  }
  return false;
}

// Close the Login Popup

function closebox_login()
{
   document.getElementById('box_form_login').style.display='none';
   document.getElementById('shadowing_login').style.display='none';   
}

</script>

