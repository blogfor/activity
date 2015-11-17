<?php
/* @var $this AtAuthvalueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Authvalues',
);

$this->menu=array(
	array('label'=>'Create AtAuthvalue', 'url'=>array('create')),
	array('label'=>'Manage AtAuthvalue', 'url'=>array('admin')),
);
?>

<h1>At Authvalues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
