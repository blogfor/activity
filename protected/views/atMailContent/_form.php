<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */
/* @var $form CActiveForm */
?>

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

	<div class="row">
		<?php echo $form->labelEx($model,'module_name'); ?>
		<?php echo $form->textField($model,'module_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'module_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_subject'); ?>
		<?php echo $form->textField($model,'mail_subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mail_subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_content'); ?>
		<?php echo $form->textArea($model,'mail_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mail_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdate'); ?>
		<?php echo $form->textField($model,'cdate'); ?>
		<?php echo $form->error($model,'cdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_footer'); ?>
		<?php echo $form->textField($model,'mail_footer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mail_footer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_exclude'); ?>
		<?php echo $form->textArea($model,'mail_exclude',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mail_exclude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_include'); ?>
		<?php echo $form->textArea($model,'mail_include',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mail_include'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instant'); ?>
		<?php echo $form->textField($model,'instant',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'instant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'include_external_emails'); ?>
		<?php echo $form->textArea($model,'include_external_emails',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'include_external_emails'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notification_on'); ?>
		<?php echo $form->textField($model,'notification_on',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'notification_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_admin'); ?>
		<?php echo $form->textField($model,'send_admin',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'send_admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->