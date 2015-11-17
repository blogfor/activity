<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */

$this->breadcrumbs=array(
	'At Membership Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtMembershipInfo', 'url'=>array('index')),
	array('label'=>'Create AtMembershipInfo', 'url'=>array('create')),
	array('label'=>'Update AtMembershipInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtMembershipInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtMembershipInfo', 'url'=>array('admin')),
);
?>

<h1>View AtMembershipInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'payment_c_date',
		'todate',
		'fromdate',
		'membership_title',
		'user_id',
		'membership_note',
	),
)); ?>
