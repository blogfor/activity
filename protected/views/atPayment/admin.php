<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */

$this->breadcrumbs=array(
	'At Payments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AtPayment', 'url'=>array('index')),
	array('label'=>'Create AtPayment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-payment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage At Payments</h1>

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
	'id'=>'at-payment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cdate',
		'membership_id',
		'final_amount',
		'payment_process',
		'payment_status',
		/*
		'Payment_method_detail',
		'payment_by',
		'bank_name',
		'check_no',
		'pay_by_fname',
		'pay_by_lname',
		'pay_by_address',
		'pay_by_phone',
		'pay_by_mobile',
		'pay_by_fax',
		'pay_by_email',
		'pay_note',
		'refund',
		'refund_note',
		'refund_by',
		'refund_time',
		'response_text',
		'online_pay_mode',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
