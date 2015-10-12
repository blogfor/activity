<?php
/* @var $this MrClassController */
/* @var $model MrClass */
/* @var $form CActiveForm */
?>


<div class="col-lg-6">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-class-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'course_id'); ?>
             <?php echo $form->dropDownList($model,'course_id',CHtml::listData(MrCourse::model()->findAll('status="Y"'),'id', 'course_name'),array('empty'=>'--- Select Course ---')); ?>
		<?php // echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'class_details'); ?>
		<?php echo $form->textArea($model,'class_details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'class_details'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'schedule'); ?>
		<?php echo $form->textField($model,'schedule',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'schedule'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'start_date'); ?>
		   <?php
                    $this->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
                        'model' => $model,
                        'attribute' => 'start_date',
                        'options' => array('yearStart'=>1925,'yearEnd'=>2050,'timepicker'=>false,'format'=>'d-m-Y','closeOnDateSelect'=>0), //DateTimePicker options
                        'htmlOptions' => array('size' => 20, 'maxlength' => 20, 'class' => 'validate[maxSize[20],required]','readonly'=>'true'),
                    ));
                    

                    ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'end_date'); ?>
		   <?php
                    $this->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
                        'model' => $model,
                        'attribute' => 'end_date',
                        'options' => array('yearStart'=>1925,'yearEnd'=>2050,'timepicker'=>false,'format'=>'d-m-Y','closeOnDateSelect'=>0), //DateTimePicker options
                        'htmlOptions' => array('size' => 20, 'maxlength' => 20, 'class' => 'validate[maxSize[20],required]','readonly'=>'true'),
                    ));
                    

                    ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
		<?php echo $form->error($model,'capacity'); ?>
	</div>

<!--	<div class="form-group">
		<?php //echo $form->labelEx($model,'status'); ?>
		 <?php //echo RBLHtml::enumRadioButtonList( $model,'status');?>
		<?php //echo $form->error($model,'status'); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div><!-- form -->