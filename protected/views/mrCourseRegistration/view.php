<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */

$this->breadcrumbs=array(
	'Mr Course Registrations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MrCourseRegistration', 'url'=>array('index')),
	array('label'=>'Create MrCourseRegistration', 'url'=>array('create')),
	array('label'=>'Update MrCourseRegistration', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MrCourseRegistration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MrCourseRegistration', 'url'=>array('admin')),
);
?>

<h1>View MrCourseRegistration #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'course_id',
		'student_id',
	),
)); ?>
