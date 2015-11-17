<?php
/* @var $this AtPartnerActivityController */
/* @var $data AtPartnerActivity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->activity_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_range')); ?>:</b>
	<?php echo CHtml::encode($data->age_range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_date')); ?>:</b>
	<?php echo CHtml::encode($data->activity_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_time')); ?>:</b>
	<?php echo CHtml::encode($data->activity_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_paid')); ?>:</b>
	<?php echo CHtml::encode($data->is_paid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdby')); ?>:</b>
	<?php echo CHtml::encode($data->createdby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedby')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedby); ?>
	<br />

	*/ ?>

</div>