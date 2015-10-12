<?php
/* @var $this MrCourseController */
/* @var $model MrCourse */

//$this->breadcrumbs=array(
//	'Mr Courses'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List MrCourse', 'url'=>array('index')),
//	array('label'=>'Manage MrCourse', 'url'=>array('admin')),
//);
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Course</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>