<?php
/* @var $this AtAuthvalueChildController */
/* @var $data AtAuthvalueChild */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classes')); ?>:</b>
	<?php echo CHtml::encode($data->classes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_desc')); ?>:</b>
	<?php echo CHtml::encode($data->membership_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_reg')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_duration')); ?>:</b>
	<?php echo CHtml::encode($data->membership_duration); ?>
	<br />

	*/ ?>

</div>