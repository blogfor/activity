<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */

$this->breadcrumbs=array(
	'At Authvalues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtAuthvalue', 'url'=>array('index')),
	array('label'=>'Manage AtAuthvalue', 'url'=>array('admin')),
);
?>

<h1>Create AtAuthvalue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>