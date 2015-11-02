<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */
/* @var $form CActiveForm */
?>
<div class="col-lg-6">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-site-settings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_address'); ?>
		<?php echo $form->textArea($model,'site_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'site_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_phone'); ?>
		<?php echo $form->textField($model,'site_phone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'site_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_email'); ?>
		<?php echo $form->textField($model,'site_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_fb'); ?>
		<?php echo $form->textField($model,'site_fb',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_fb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_gplus'); ?>
		<?php echo $form->textField($model,'site_gplus',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_gplus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_twitter'); ?>
		<?php echo $form->textField($model,'site_twitter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_paypal_business_email'); ?>
		<?php echo $form->textField($model,'site_paypal_business_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_paypal_business_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_paypal_secrect'); ?>
		<?php echo $form->textField($model,'site_paypal_secrect',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_paypal_secrect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_paypal_authid'); ?>
		<?php echo $form->textField($model,'site_paypal_authid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site_paypal_authid'); ?>
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