<?php
/* @var $this AtUsersController */
/* @var $model AtUsers */

$this->breadcrumbs=array(
	'At Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtUsers', 'url'=>array('index')),
	array('label'=>'Create AtUsers', 'url'=>array('create')),
	array('label'=>'Update AtUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtUsers', 'url'=>array('admin')),
);
?>

<h1>View AtUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'profilepic',
		'firstname',
		'lastname',
		'address1',
		'sex',
		'user_type',
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
