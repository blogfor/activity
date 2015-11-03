<?php
/* @var $this AtKidsActivitiesController */
/* @var $data AtKidsActivities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kids_name')); ?>:</b>
	<?php echo CHtml::encode($data->kids_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kids_description')); ?>:</b>
	<?php echo CHtml::encode($data->kids_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kids_image')); ?>:</b>
	<?php echo CHtml::encode($data->kids_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>