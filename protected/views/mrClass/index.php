<?php
/* @var $this MrClassController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Mr Classes',
//);
//
//$this->menu=array(
//	array('label'=>'Create MrClass', 'url'=>array('create')),
//	array('label'=>'Manage MrClass', 'url'=>array('admin')),
//);
?>

<h1>Mr Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
