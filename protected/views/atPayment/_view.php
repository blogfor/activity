<?php
/* @var $this AtPaymentController */
/* @var $data AtPayment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdate')); ?>:</b>
	<?php echo CHtml::encode($data->cdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('final_amount')); ?>:</b>
	<?php echo CHtml::encode($data->final_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_process')); ?>:</b>
	<?php echo CHtml::encode($data->payment_process); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_status')); ?>:</b>
	<?php echo CHtml::encode($data->payment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Payment_method_detail')); ?>:</b>
	<?php echo CHtml::encode($data->Payment_method_detail); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_by')); ?>:</b>
	<?php echo CHtml::encode($data->payment_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_no')); ?>:</b>
	<?php echo CHtml::encode($data->check_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_fname')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_lname')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_address')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_phone')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_fax')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_by_email')); ?>:</b>
	<?php echo CHtml::encode($data->pay_by_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_note')); ?>:</b>
	<?php echo CHtml::encode($data->pay_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refund')); ?>:</b>
	<?php echo CHtml::encode($data->refund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refund_note')); ?>:</b>
	<?php echo CHtml::encode($data->refund_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refund_by')); ?>:</b>
	<?php echo CHtml::encode($data->refund_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refund_time')); ?>:</b>
	<?php echo CHtml::encode($data->refund_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response_text')); ?>:</b>
	<?php echo CHtml::encode($data->response_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('online_pay_mode')); ?>:</b>
	<?php echo CHtml::encode($data->online_pay_mode); ?>
	<br />

	*/ ?>

</div>