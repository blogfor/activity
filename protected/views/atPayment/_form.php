<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'at-payment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cdate'); ?>
		<?php echo $form->textField($model,'cdate'); ?>
		<?php echo $form->error($model,'cdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_id'); ?>
		<?php echo $form->textField($model,'membership_id'); ?>
		<?php echo $form->error($model,'membership_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'final_amount'); ?>
		<?php echo $form->textField($model,'final_amount'); ?>
		<?php echo $form->error($model,'final_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_process'); ?>
		<?php echo $form->textField($model,'payment_process'); ?>
		<?php echo $form->error($model,'payment_process'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Payment_method_detail'); ?>
		<?php echo $form->textField($model,'Payment_method_detail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Payment_method_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_by'); ?>
		<?php echo $form->textField($model,'payment_by'); ?>
		<?php echo $form->error($model,'payment_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_no'); ?>
		<?php echo $form->textField($model,'check_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'check_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_fname'); ?>
		<?php echo $form->textField($model,'pay_by_fname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pay_by_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_lname'); ?>
		<?php echo $form->textField($model,'pay_by_lname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pay_by_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_address'); ?>
		<?php echo $form->textField($model,'pay_by_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pay_by_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_phone'); ?>
		<?php echo $form->textField($model,'pay_by_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pay_by_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_mobile'); ?>
		<?php echo $form->textField($model,'pay_by_mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pay_by_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_fax'); ?>
		<?php echo $form->textField($model,'pay_by_fax',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pay_by_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_by_email'); ?>
		<?php echo $form->textField($model,'pay_by_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pay_by_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_note'); ?>
		<?php echo $form->textField($model,'pay_note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pay_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refund'); ?>
		<?php echo $form->textField($model,'refund',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'refund'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refund_note'); ?>
		<?php echo $form->textField($model,'refund_note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'refund_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refund_by'); ?>
		<?php echo $form->textField($model,'refund_by'); ?>
		<?php echo $form->error($model,'refund_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refund_time'); ?>
		<?php echo $form->textField($model,'refund_time'); ?>
		<?php echo $form->error($model,'refund_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'response_text'); ?>
		<?php echo $form->textArea($model,'response_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'response_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'online_pay_mode'); ?>
		<?php echo $form->textField($model,'online_pay_mode',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'online_pay_mode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->