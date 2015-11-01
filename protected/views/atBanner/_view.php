<?php
/* @var $this AtBannerController */
/* @var $data AtBanner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_title')); ?>:</b>
	<?php echo CHtml::encode($data->banner_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_description')); ?>:</b>
	<?php echo CHtml::encode($data->banner_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_link')); ?>:</b>
	<?php echo CHtml::encode($data->banner_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_order')); ?>:</b>
	<?php echo CHtml::encode($data->banner_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added')); ?>:</b>
	<?php echo CHtml::encode($data->added); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>