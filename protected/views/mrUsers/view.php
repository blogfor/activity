<?php
/* @var $this MrUsersController */
/* @var $model MrUsers */

$this->breadcrumbs=array(
	'Mr Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MrUsers', 'url'=>array('index')),
	array('label'=>'Create MrUsers', 'url'=>array('create')),
	array('label'=>'Update MrUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MrUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MrUsers', 'url'=>array('admin')),
);
?>

<h1>View MrUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'firstname',
		'lastname',
		'address1',
		'sex',
		'office_phone',
		'home_phone',
		'zipcode',
		'create_at',
		'lastvisit_at',
		'superuser',
		'status',
		'createdby',
		'modifiedby',
	),
)); ?>
