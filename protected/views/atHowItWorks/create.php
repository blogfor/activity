<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */

$this->breadcrumbs=array(
	'At How It Works'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtHowItWorks', 'url'=>array('index')),
	array('label'=>'Manage AtHowItWorks', 'url'=>array('admin')),
);
?>

<h1>Create AtHowItWorks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>