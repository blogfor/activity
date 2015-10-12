<?php
/* @var $this MrSignatureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Signatures',
);

$this->menu=array(
	array('label'=>'Create MrSignature', 'url'=>array('create')),
	array('label'=>'Manage MrSignature', 'url'=>array('admin')),
);
?>

<h1>Mr Signatures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
