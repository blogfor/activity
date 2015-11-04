<?php
/* @var $this AtUsersChildController */
/* @var $model AtUsersChild */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-users-child-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'child_name'); ?>
		<?php echo $form->textField($model,'child_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'child_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'child_age'); ?>
		<?php echo $form->textField($model,'child_age',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'child_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added'); ?>
		<?php echo $form->textField($model,'added'); ?>
		<?php echo $form->error($model,'added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->