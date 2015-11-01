<?php
/* @var $this AtMailContentController */
/* @var $data AtMailContent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_name')); ?>:</b>
	<?php echo CHtml::encode($data->module_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_subject')); ?>:</b>
	<?php echo CHtml::encode($data->mail_subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_content')); ?>:</b>
	<?php echo CHtml::encode($data->mail_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdate')); ?>:</b>
	<?php echo CHtml::encode($data->cdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_footer')); ?>:</b>
	<?php echo CHtml::encode($data->mail_footer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_exclude')); ?>:</b>
	<?php echo CHtml::encode($data->mail_exclude); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_include')); ?>:</b>
	<?php echo CHtml::encode($data->mail_include); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instant')); ?>:</b>
	<?php echo CHtml::encode($data->instant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('include_external_emails')); ?>:</b>
	<?php echo CHtml::encode($data->include_external_emails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notification_on')); ?>:</b>
	<?php echo CHtml::encode($data->notification_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_admin')); ?>:</b>
	<?php echo CHtml::encode($data->send_admin); ?>
	<br />

	*/ ?>

</div>