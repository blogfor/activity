<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */
/* @var $form CActiveForm */
?>
<div class="col-lg-6">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-mail-content-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'module_name'); ?>
		<?php echo $form->textField($model,'module_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'module_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mail_subject'); ?>
		<?php echo $form->textField($model,'mail_subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mail_subject'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mail_content'); ?>
		<?php echo $form->textArea($model,'mail_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mail_content'); ?>
	</div>

	

	<div class="form-group">
		<?php echo $form->labelEx($model,'mail_footer'); ?>
		<?php echo $form->textField($model,'mail_footer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mail_footer'); ?>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'include_external_emails'); ?>
		<?php echo $form->textArea($model,'include_external_emails',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'include_external_emails'); ?>
	</div>


	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->