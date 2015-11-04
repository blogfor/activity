<?php
/* @var $this AtUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Users',
);

$this->menu=array(
	array('label'=>'Create AtUsers', 'url'=>array('create')),
	array('label'=>'Manage AtUsers', 'url'=>array('admin')),
);
?>

<h1>At Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
