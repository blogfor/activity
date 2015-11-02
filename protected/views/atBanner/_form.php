<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-banner-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_title'); ?>
		<?php echo $form->textField($model,'banner_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'banner_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_description'); ?>
		<?php echo $form->textArea($model,'banner_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'banner_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_link'); ?>
		<?php echo $form->textArea($model,'banner_link',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'banner_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_order'); ?>
		<?php echo $form->textField($model,'banner_order'); ?>
		<?php echo $form->error($model,'banner_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->