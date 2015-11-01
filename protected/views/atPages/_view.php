<?php
/* @var $this AtPagesController */
/* @var $data AtPages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
	<?php echo CHtml::encode($data->page_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_description')); ?>:</b>
	<?php echo CHtml::encode($data->page_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>