<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */

$this->breadcrumbs=array(
	'At Membership Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtMembershipInfo', 'url'=>array('index')),
	array('label'=>'Create AtMembershipInfo', 'url'=>array('create')),
	array('label'=>'View AtMembershipInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtMembershipInfo', 'url'=>array('admin')),
);
?>

<h1>Update AtMembershipInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>