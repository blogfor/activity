<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */
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
		<?php echo $form->label($model,'cdate'); ?>
		<?php echo $form->textField($model,'cdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membership_id'); ?>
		<?php echo $form->textField($model,'membership_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'final_amount'); ?>
		<?php echo $form->textField($model,'final_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_process'); ?>
		<?php echo $form->textField($model,'payment_process'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Payment_method_detail'); ?>
		<?php echo $form->textField($model,'Payment_method_detail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_by'); ?>
		<?php echo $form->textField($model,'payment_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_no'); ?>
		<?php echo $form->textField($model,'check_no',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_fname'); ?>
		<?php echo $form->textField($model,'pay_by_fname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_lname'); ?>
		<?php echo $form->textField($model,'pay_by_lname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_address'); ?>
		<?php echo $form->textField($model,'pay_by_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_phone'); ?>
		<?php echo $form->textField($model,'pay_by_phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_mobile'); ?>
		<?php echo $form->textField($model,'pay_by_mobile',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_fax'); ?>
		<?php echo $form->textField($model,'pay_by_fax',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_by_email'); ?>
		<?php echo $form->textField($model,'pay_by_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_note'); ?>
		<?php echo $form->textField($model,'pay_note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refund'); ?>
		<?php echo $form->textField($model,'refund',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refund_note'); ?>
		<?php echo $form->textField($model,'refund_note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refund_by'); ?>
		<?php echo $form->textField($model,'refund_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refund_time'); ?>
		<?php echo $form->textField($model,'refund_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'response_text'); ?>
		<?php echo $form->textArea($model,'response_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'online_pay_mode'); ?>
		<?php echo $form->textField($model,'online_pay_mode',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->