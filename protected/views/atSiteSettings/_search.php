<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_address'); ?>
		<?php echo $form->textArea($model,'site_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_phone'); ?>
		<?php echo $form->textField($model,'site_phone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_email'); ?>
		<?php echo $form->textField($model,'site_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_fb'); ?>
		<?php echo $form->textField($model,'site_fb',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_gplus'); ?>
		<?php echo $form->textField($model,'site_gplus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_twitter'); ?>
		<?php echo $form->textField($model,'site_twitter',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_paypal_business_email'); ?>
		<?php echo $form->textField($model,'site_paypal_business_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_paypal_secrect'); ?>
		<?php echo $form->textField($model,'site_paypal_secrect',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_paypal_authid'); ?>
		<?php echo $form->textField($model,'site_paypal_authid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->