<?php
/* @var $this MrCourseController */
/* @var $model MrCourse */
/* @var $form CActiveForm */
?>

<div class="col-lg-6">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mr-course-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'course_name'); ?>
		<?php echo $form->textField($model,'course_name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'course_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'course_abbr'); ?>
		<?php echo $form->textField($model,'course_abbr',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'course_abbr'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'course_fees'); ?>
		<?php echo $form->textField($model,'course_fees',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'course_fees'); ?>
	</div>
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'status'); ?>
             <?php //echo RBLHtml::enumRadioButtonList( $model,'status');?>
		<?php //echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'status'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'signature1'); ?>
                <?php echo $form->dropDownList($model,'signature1',CHtml::listData(MrSignature::model()->findAll(),'id', 'name','signature_category'),array('empty'=>'--- Select Signature ---'),array('class'=>'form-control')); ?>
		<?php //echo $form->textField($model,'routeofentry'); ?>
		<?php echo $form->error($model,'signature1'); ?>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'signature2'); ?>
                <?php echo $form->dropDownList($model,'signature2',CHtml::listData(MrSignature::model()->findAll(),'id', 'name','signature_category'),array('empty'=>'--- Select Signature ---')); ?>
		<?php //echo $form->textField($model,'routeofentry'); ?>
		<?php echo $form->error($model,'signature2'); ?>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'show_name'); ?> 
               <?php //echo RBLHtml::enumRadioButtonList($model, 'show_name'); 
                echo ZHtml::enumDropDownList($model, 'show_name',array('empty'=>'--Please select--'));
                ?>
	</div>
        
        
        
        

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>


<script>
    
function preventDupes( select, index ) {
    var options = select.options,
        len = options.length;
    while( len-- ) {
        options[ len ].disabled = false;
    }
    select.options[ index ].disabled = true;
    if( index === select.selectedIndex ) {
        alert('You\'ve already selected the item "' + select.options[index].text + '".\n\nPlease choose another.');
        this.selectedIndex = 0;
    }
}

var select1 = select = document.getElementById( 'MrCourse_signature1' );
var select2 = select = document.getElementById( 'MrCourse_signature2' );

select1.onchange = function() {
    preventDupes.call(this, select2, this.selectedIndex );
};

select2.onchange = function() {
    preventDupes.call(this, select1, this.selectedIndex );
};

</script>
    