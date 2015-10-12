<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */

//$this->breadcrumbs=array(
//	'Mr Students'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List MrStudents', 'url'=>array('index')),
//	array('label'=>'Manage MrStudents', 'url'=>array('admin')),
//);

//print_r($_REQUEST);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Student</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php if(Yii::app()->session['student_reg']=="Y") echo '<p style="padding:5px; background-color:#ccc"> Please create student to register for this course. </p>'; ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>