<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */
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
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'payment_c_date'); ?>
		<?php echo $form->textField($model,'payment_c_date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'todate'); ?>
		<?php echo $form->textField($model,'todate'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'fromdate'); ?>
		<?php echo $form->textField($model,'fromdate'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'membership_title'); ?>
		<?php echo $form->textField($model,'membership_title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->label($model,'membership_note'); ?>
		<?php echo $form->textField($model,'membership_note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>