<?php
/* @var $this AtBannerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Banners',
);

$this->menu=array(
	array('label'=>'Create AtBanner', 'url'=>array('create')),
	array('label'=>'Manage AtBanner', 'url'=>array('admin')),
);
?>

<h1>At Banners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
