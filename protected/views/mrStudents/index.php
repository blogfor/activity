<?php
/* @var $this MrStudentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Students',
);

$this->menu=array(
	array('label'=>'Create MrStudents', 'url'=>array('create')),
	array('label'=>'Manage MrStudents', 'url'=>array('admin')),
);
?>

<h1>Mr Students</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
