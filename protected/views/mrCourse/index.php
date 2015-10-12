<?php
/* @var $this MrCourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Courses',
);

$this->menu=array(
	array('label'=>'Create MrCourse', 'url'=>array('create')),
	array('label'=>'Manage MrCourse', 'url'=>array('admin')),
);
?>

<h1>Mr Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
