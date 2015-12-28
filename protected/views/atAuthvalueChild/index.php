<?php
/* @var $this AtAuthvalueChildController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Authvalue Children',
);

$this->menu=array(
	array('label'=>'Create AtAuthvalueChild', 'url'=>array('create')),
	array('label'=>'Manage AtAuthvalueChild', 'url'=>array('admin')),
);
?>

<h1>At Authvalue Children</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
