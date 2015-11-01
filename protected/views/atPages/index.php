<?php
/* @var $this AtPagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Pages',
);

$this->menu=array(
	array('label'=>'Create AtPages', 'url'=>array('create')),
	array('label'=>'Manage AtPages', 'url'=>array('admin')),
);
?>

<h1>At Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
