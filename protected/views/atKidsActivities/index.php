<?php
/* @var $this AtKidsActivitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Kids Activities',
);

$this->menu=array(
	array('label'=>'Create AtKidsActivities', 'url'=>array('create')),
	array('label'=>'Manage AtKidsActivities', 'url'=>array('admin')),
);
?>

<h1>At Kids Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
