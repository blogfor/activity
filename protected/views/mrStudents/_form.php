<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */
/* @var $form CActiveForm */
?>

<div class="col-lg-6">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-students-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255, 'class'=>'validate[required]')); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255,'class'=>'validate[required]')); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'dob'); ?>
            
            <?php
                    $this->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
                        'model' => $model,
                        'attribute' => 'dob',
                        'options' => array('yearStart'=>1925,'yearEnd'=>2010,'timepicker'=>false,'format'=>'Y-m-d','closeOnDateSelect'=>0), //DateTimePicker options
                        'htmlOptions' => array('size' => 20, 'maxlength' => 20, 'class' => 'validate[maxSize[20],required]'),
                    ));
                    

                    ?>
            
		<?php //echo $form->textField($model,'dob'); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class'=>'validate[required,custom[email]]')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CDCNO'); ?>
		<?php 
                if(isset($_REQUEST['cdcno'])) $cdcval=$_REQUEST['cdcno']; else $cdcval=$model['CDCNO'];
                echo $form->textField($model,'CDCNO',array('size'=>50,'maxlength'=>50, 'value'=>$cdcval)); ?>
		<?php echo $form->error($model,'CDCNO'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'INDOSNO'); ?>
		<?php echo $form->textField($model,'INDOSNO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'INDOSNO'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'passportno'); ?>
		<?php echo $form->textField($model,'passportno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'passportno'); ?>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'passport_issue_from'); ?>
		<?php echo $form->textField($model,'passport_issue_from',array('size'=>50,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'passport_issue_from'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'certificate'); ?>
		<?php echo $form->textArea($model,'certificate',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'certificate'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'routeofentry'); ?>
                <?php echo $form->dropDownList($model,'routeofentry',CHtml::listData(MrProfessionType::model()->findAll(),'id', 'profession_type'),array('empty'=>'--- Select Profession ---')); ?>
		<?php //echo $form->textField($model,'routeofentry'); ?>
		<?php echo $form->error($model,'routeofentry'); ?>
	</div>

<!--	<div class="form-group">
		<?php //echo $form->labelEx($model,'status'); ?>
		 <?php //echo RBLHtml::enumRadioButtonList( $model,'status');?>
		<?php //echo $form->error($model,'status'); ?>
	</div>-->


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<br clear="all" />
</div><!-- form -->
<br clear="all" />
</div>
<br clear="all" />

<script>

jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#mr-students-form").validationEngine();
		});
    
</script>