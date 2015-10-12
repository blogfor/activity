<?php
/* @var $this MrCourseController */
/* @var $model MrCourse */

$this->breadcrumbs=array(
	'Mr Courses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MrCourse', 'url'=>array('index')),
	array('label'=>'Create MrCourse', 'url'=>array('create')),
	array('label'=>'Update MrCourse', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MrCourse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MrCourse', 'url'=>array('admin')),
);
?>

<h1>View MrCourse #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'course_name',
		'course_abbr',
		'level',
                'course_fees',
		'status',
	),
)); ?>
