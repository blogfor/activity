<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */
/* @var $form CActiveForm */
?>
<div class="col-lg-6">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'hwt_name'); ?>
		<?php echo $form->textField($model,'hwt_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'hwt_description'); ?>
		<?php echo $form->textField($model,'hwt_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->label($model,'hwt_image'); ?>
		<?php echo $form->textField($model,'hwt_image',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>