<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */
/* @var $form CActiveForm */
?>
<div class="col-lg-6">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'module_name'); ?>
		<?php echo $form->textField($model,'module_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'mail_subject'); ?>
		<?php echo $form->textField($model,'mail_subject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'mail_content'); ?>
		<?php echo $form->textArea($model,'mail_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->label($model,'cdate'); ?>
		<?php echo $form->textField($model,'cdate'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'mail_footer'); ?>
		<?php echo $form->textField($model,'mail_footer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'mail_exclude'); ?>
		<?php echo $form->textArea($model,'mail_exclude',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'mail_include'); ?>
		<?php echo $form->textArea($model,'mail_include',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'instant'); ?>
		<?php echo $form->textField($model,'instant',array('size'=>1,'maxlength'=>1)); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->label($model,'include_external_emails'); ?>
		<?php echo $form->textArea($model,'include_external_emails',array('rows'=>6, 'cols'=>50)); ?>
	</div>

<!--	<div class="form-group">
		<?php echo $form->label($model,'notification_on'); ?>
		<?php echo $form->textField($model,'notification_on',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'send_admin'); ?>
		<?php echo $form->textField($model,'send_admin',array('size'=>3,'maxlength'=>3)); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>