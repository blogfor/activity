<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */

$this->breadcrumbs=array(
	'At Membership Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AtMembershipInfo', 'url'=>array('index')),
	array('label'=>'Create AtMembershipInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-membership-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage At Membership Infos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'at-membership-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'payment_c_date',
		'todate',
		'fromdate',
		'membership_title',
		'user_id',
		/*
		'membership_note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
