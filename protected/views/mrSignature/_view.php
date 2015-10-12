<?php
/* @var $this MrSignatureController */
/* @var $data MrSignature */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('images_name')); ?>:</b>
	<?php echo CHtml::encode($data->images_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signature_category')); ?>:</b>
	<?php echo CHtml::encode($data->signature_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>