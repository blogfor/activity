<?php
/* @var $this AtPartnerActivityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Partner Activities',
);

$this->menu=array(
	array('label'=>'Create AtPartnerActivity', 'url'=>array('create')),
	array('label'=>'Manage AtPartnerActivity', 'url'=>array('admin')),
);
?>

<h1>At Partner Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
