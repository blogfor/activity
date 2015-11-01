<?php
/* @var $this AtMailContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Mail Contents',
);

$this->menu=array(
	array('label'=>'Create AtMailContent', 'url'=>array('create')),
	array('label'=>'Manage AtMailContent', 'url'=>array('admin')),
);
?>

<h1>At Mail Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
