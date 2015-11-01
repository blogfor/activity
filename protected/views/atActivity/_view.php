<?php
/* @var $this AtActivityController */
/* @var $data AtActivity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_name')); ?>:</b>
	<?php echo CHtml::encode($data->activity_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_description')); ?>:</b>
	<?php echo CHtml::encode($data->activity_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_image')); ?>:</b>
	<?php echo CHtml::encode($data->activity_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>