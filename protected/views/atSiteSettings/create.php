<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */

$this->breadcrumbs=array(
	'At Site Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtSiteSettings', 'url'=>array('index')),
	array('label'=>'Manage AtSiteSettings', 'url'=>array('admin')),
);
?>

<h1>Create AtSiteSettings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>