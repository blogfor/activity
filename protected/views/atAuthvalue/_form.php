<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */
/* @var $form CActiveForm */
?>
<div class="col-lg-6">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-authvalue-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'membership_desc'); ?>
		<?php echo $form->textArea($model,'membership_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'membership_desc'); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->labelEx($model,'number_of_reg'); ?>
		<?php echo $form->textField($model,'number_of_reg'); ?>
		<?php echo $form->error($model,'number_of_reg'); ?>
	</div>-->

<!--	<div class="form-group">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>-->

<!--	<div class="form-group">
		<?php echo $form->labelEx($model,'membership_duration'); ?>
		<?php echo $form->textField($model,'membership_duration'); ?>
		<?php echo $form->error($model,'membership_duration'); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>