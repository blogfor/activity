<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */

$this->breadcrumbs=array(
	'At Mail Contents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtMailContent', 'url'=>array('index')),
	array('label'=>'Create AtMailContent', 'url'=>array('create')),
	array('label'=>'Update AtMailContent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtMailContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtMailContent', 'url'=>array('admin')),
);
?>

<h1>View AtMailContent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_name',
		'mail_subject',
		'mail_content',
		'cdate',
		'mail_footer',
		'mail_exclude',
		'mail_include',
		'instant',
		'include_external_emails',
		'notification_on',
		'send_admin',
	),
)); ?>
