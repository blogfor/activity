<?php
/* @var $this MrSignatureController */
/* @var $model MrSignature */
/* @var $form CActiveForm */
?>

<div class="col-lg-6">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-signature-form',
       'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="form-group">
		<?php //echo $form->labelEx($model,'images_name'); ?>
		<?php //echo $form->fileField($model,'images_name',array('class'=>'validate[required]')); ?>
		<?php //echo $form->error($model,'images_name'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'signature_category'); ?>
             <?php echo ZHtml::enumDropDownList( $model,'signature_category',array('empty'=>'--Choose One--','class'=>'validate[required]')); ?>	
		
		<?php echo $form->error($model,'signature_category'); ?>
	</div>
        
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('class'=>'validate[required]')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'short_name'); ?>
		<?php echo $form->textField($model,'short_name',array('class'=>'validate[required]')); ?>
		<?php echo $form->error($model,'short_name'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<br clear="all" />
</div><!-- form -->
<br clear="all" />
</div>
<br clear="all" />

<script>

jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#mr-signature-form").validationEngine();
});
    
</script>