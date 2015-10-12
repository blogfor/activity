<?php
/* @var $this MrProfessionTypeController */
/* @var $data MrProfessionType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profession_type')); ?>:</b>
	<?php echo CHtml::encode($data->profession_type); ?>
	<br />


</div>