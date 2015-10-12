<?php
/* @var $this MrCourseController */
/* @var $model MrCourse */

$this->breadcrumbs=array(
	'Mr Courses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrCourse', 'url'=>array('index')),
	array('label'=>'Create MrCourse', 'url'=>array('create')),
	array('label'=>'View MrCourse', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrCourse', 'url'=>array('admin')),
);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Course</h1>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>