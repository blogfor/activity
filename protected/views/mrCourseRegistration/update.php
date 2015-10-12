<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */

$this->breadcrumbs=array(
	'Mr Course Registrations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrCourseRegistration', 'url'=>array('index')),
	array('label'=>'Create MrCourseRegistration', 'url'=>array('create')),
	array('label'=>'View MrCourseRegistration', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrCourseRegistration', 'url'=>array('admin')),
);
?>

<h1>Update MrCourseRegistration <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>