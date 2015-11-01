<?php
/* @var $this AtSiteSettingsController */
/* @var $data AtSiteSettings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_address')); ?>:</b>
	<?php echo CHtml::encode($data->site_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_phone')); ?>:</b>
	<?php echo CHtml::encode($data->site_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_email')); ?>:</b>
	<?php echo CHtml::encode($data->site_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_fb')); ?>:</b>
	<?php echo CHtml::encode($data->site_fb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_gplus')); ?>:</b>
	<?php echo CHtml::encode($data->site_gplus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->site_twitter); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('site_paypal_business_email')); ?>:</b>
	<?php echo CHtml::encode($data->site_paypal_business_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_paypal_secrect')); ?>:</b>
	<?php echo CHtml::encode($data->site_paypal_secrect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_paypal_authid')); ?>:</b>
	<?php echo CHtml::encode($data->site_paypal_authid); ?>
	<br />

	*/ ?>

</div>