<?php
/* @var $this MrUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mr Users',
);

$this->menu=array(
	array('label'=>'Create MrUsers', 'url'=>array('create')),
	array('label'=>'Manage MrUsers', 'url'=>array('admin')),
);
?>

<h1>Mr Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));  ?>
