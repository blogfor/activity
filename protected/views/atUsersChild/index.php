<?php
/* @var $this AtUsersChildController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Users Children',
);

$this->menu=array(
	array('label'=>'Create AtUsersChild', 'url'=>array('create')),
	array('label'=>'Manage AtUsersChild', 'url'=>array('admin')),
);
?>

<h1>At Users Children</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
