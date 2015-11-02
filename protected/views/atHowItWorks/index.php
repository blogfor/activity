<?php
/* @var $this AtHowItWorksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At How It Works',
);

$this->menu=array(
	array('label'=>'Create AtHowItWorks', 'url'=>array('create')),
	array('label'=>'Manage AtHowItWorks', 'url'=>array('admin')),
);
?>

<h1>At How It Works</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
