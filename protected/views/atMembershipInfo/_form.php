<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-membership-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_c_date'); ?>
		<?php echo $form->textField($model,'payment_c_date'); ?>
		<?php echo $form->error($model,'payment_c_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'todate'); ?>
		<?php echo $form->textField($model,'todate'); ?>
		<?php echo $form->error($model,'todate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromdate'); ?>
		<?php echo $form->textField($model,'fromdate'); ?>
		<?php echo $form->error($model,'fromdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_title'); ?>
		<?php echo $form->textField($model,'membership_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'membership_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_note'); ?>
		<?php echo $form->textField($model,'membership_note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'membership_note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->