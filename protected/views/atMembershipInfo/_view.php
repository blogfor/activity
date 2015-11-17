<?php
/* @var $this AtMembershipInfoController */
/* @var $data AtMembershipInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_c_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_c_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('todate')); ?>:</b>
	<?php echo CHtml::encode($data->todate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromdate')); ?>:</b>
	<?php echo CHtml::encode($data->fromdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_title')); ?>:</b>
	<?php echo CHtml::encode($data->membership_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_note')); ?>:</b>
	<?php echo CHtml::encode($data->membership_note); ?>
	<br />


</div>