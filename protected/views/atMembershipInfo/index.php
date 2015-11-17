<?php
/* @var $this AtMembershipInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Membership Infos',
);

$this->menu=array(
	array('label'=>'Create AtMembershipInfo', 'url'=>array('create')),
	array('label'=>'Manage AtMembershipInfo', 'url'=>array('admin')),
);
?>

<h1>At Membership Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
