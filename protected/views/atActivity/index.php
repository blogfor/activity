<?php
/* @var $this AtActivityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Activities',
);

$this->menu=array(
	array('label'=>'Create AtActivity', 'url'=>array('create')),
	array('label'=>'Manage AtActivity', 'url'=>array('admin')),
);
?>

<h1>At Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
