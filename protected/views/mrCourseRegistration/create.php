<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */

$this->breadcrumbs=array(
	'Course Registrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MrCourseRegistration', 'url'=>array('index')),
	array('label'=>'Manage MrCourseRegistration', 'url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Registration</h1>
		
    </div>
    <!-- /.col-lg-12 -->
</div>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>