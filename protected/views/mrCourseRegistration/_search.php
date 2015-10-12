<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
        'id'=>'courseregistrationfrm',
	'method'=>'get',
)); ?>

<!--	<div class="row">
		<?php //echo $form->label($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>-->

	<div class="row">
            <?php echo $form->label($model,'course_id'); ?>
            <?php //echo $form->textField($model,'course_id'); ?>
            <?php echo CHtml::dropDownList('course_id','',CHtml::listData(MrCourse::model()->findAll('status="Y"'),'id', 'course_name'),array('empty'=>'--- Select Course ---','onchange'=>'javascript:showClases();','class'=>'validate[required]'));
        ?>
            
             <div id="classesDiv"></div> 
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model,'student_id'); ?>
		<?php //echo $form->textField($model,'student_id'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::Button('Search',array('onclick'=>'return submitCourselist("courseregistrationfrm");')); ?>
	</div>
    
    <script>
    function showClases()
    {
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/classes'); ?>",
            data: "courseid=" + $('#course_id').val(),
            success: function(msg) {
                    $('#classesDiv').empty();
                    $('#classesDiv').html("<label> Class </label>"+msg);
            }
        });
    }
    </script>
    
<?php $this->endWidget(); ?>

</div><!-- search-form -->