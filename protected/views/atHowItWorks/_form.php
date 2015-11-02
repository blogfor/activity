<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-how-it-works-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hwt_name'); ?>
		<?php echo $form->textField($model,'hwt_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hwt_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hwt_description'); ?>
		<?php echo $form->textArea($model,'hwt_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hwt_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hwt_image'); ?>
		<?php echo $form->textField($model,'hwt_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hwt_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
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