<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */

$this->breadcrumbs=array(
	'At How It Works'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtHowItWorks', 'url'=>array('index')),
	array('label'=>'Create AtHowItWorks', 'url'=>array('create')),
	array('label'=>'View AtHowItWorks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtHowItWorks', 'url'=>array('admin')),
);
?>

<h1>Update AtHowItWorks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>