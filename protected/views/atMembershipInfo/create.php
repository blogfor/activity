<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */

$this->breadcrumbs=array(
	'At Membership Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtMembershipInfo', 'url'=>array('index')),
	array('label'=>'Manage AtMembershipInfo', 'url'=>array('admin')),
);
?>

<h1>Create AtMembershipInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>