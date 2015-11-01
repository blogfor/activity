<?php
/* @var $this AtSiteSettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Site Settings',
);

$this->menu=array(
	array('label'=>'Create AtSiteSettings', 'url'=>array('create')),
	array('label'=>'Manage AtSiteSettings', 'url'=>array('admin')),
);
?>

<h1>At Site Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
