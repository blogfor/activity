<?php
/* @var $this AtPartnerActivityController */
/* @var $model AtPartnerActivity */
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
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activity_type_id'); ?>
		<?php echo $form->textField($model,'activity_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age_range'); ?>
		<?php echo $form->textField($model,'age_range',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activity_date'); ?>
		<?php echo $form->textField($model,'activity_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activity_time'); ?>
		<?php echo $form->textField($model,'activity_time',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_paid'); ?>
		<?php echo $form->textField($model,'is_paid',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdby'); ?>
		<?php echo $form->textField($model,'createdby'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedby'); ?>
		<?php echo $form->textField($model,'modifiedby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->