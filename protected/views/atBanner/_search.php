<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */
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
		<?php echo $form->label($model,'banner_title'); ?>
		<?php echo $form->textField($model,'banner_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'banner_description'); ?>
		<?php echo $form->textField($model,'banner_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->label($model,'banner_link'); ?>
		<?php echo $form->textArea($model,'banner_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'banner_order'); ?>
		<?php echo $form->textField($model,'banner_order'); ?>
	</div>

<div class="form-group">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'added'); ?>
		<?php echo $form->textField($model,'added'); ?>
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