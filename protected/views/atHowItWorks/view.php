<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */

$this->breadcrumbs=array(
	'At How It Works'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtHowItWorks', 'url'=>array('index')),
	array('label'=>'Create AtHowItWorks', 'url'=>array('create')),
	array('label'=>'Update AtHowItWorks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtHowItWorks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtHowItWorks', 'url'=>array('admin')),
);
?>

<h1>View AtHowItWorks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hwt_name',
		'hwt_description',
		'hwt_image',
		'created',
		'modified',
	),
)); ?>
