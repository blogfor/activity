<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-course-registration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<div class="row">
		<label> Enter CDC. NO.</label>
		<input type="text" name="CDCno" class="validate[required]">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<script>
jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#mr-course-registration-form").validationEngine();
		});

</script>
    
<?php $this->endWidget(); ?>