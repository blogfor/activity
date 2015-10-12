<?php
/* @var $this MrCourseRegistrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Course Registrations',
);

$this->menu=array(
	array('label'=>'Create MrCourseRegistration', 'url'=>array('create')),
	array('label'=>'Manage MrCourseRegistration', 'url'=>array('admin')),
);
?>

<h1>Mr Course Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
