<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */

$this->breadcrumbs=array(
	'At Site Settings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtSiteSettings', 'url'=>array('index')),
	array('label'=>'Create AtSiteSettings', 'url'=>array('create')),
	array('label'=>'Update AtSiteSettings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtSiteSettings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtSiteSettings', 'url'=>array('admin')),
);
?>

<h1>View AtSiteSettings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_address',
		'site_phone',
		'site_email',
		'site_fb',
		'site_gplus',
		'site_twitter',
		'site_paypal_business_email',
		'site_paypal_secrect',
		'site_paypal_authid',
	),
)); ?>
