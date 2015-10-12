<?php
/* @var $this MrProfessionTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Profession Types',
);

$this->menu=array(
	array('label'=>'Create MrProfessionType', 'url'=>array('create')),
	array('label'=>'Manage MrProfessionType', 'url'=>array('admin')),
);
?>

<h1>Mr Profession Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
