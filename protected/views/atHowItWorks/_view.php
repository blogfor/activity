<?php
/* @var $this AtHowItWorksController */
/* @var $data AtHowItWorks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hwt_name')); ?>:</b>
	<?php echo CHtml::encode($data->hwt_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hwt_description')); ?>:</b>
	<?php echo CHtml::encode($data->hwt_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hwt_image')); ?>:</b>
	<?php echo CHtml::encode($data->hwt_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>