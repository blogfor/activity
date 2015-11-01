<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */

$this->breadcrumbs=array(
	'At Payments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtPayment', 'url'=>array('index')),
	array('label'=>'Create AtPayment', 'url'=>array('create')),
	array('label'=>'Update AtPayment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtPayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtPayment', 'url'=>array('admin')),
);
?>

<h1>View AtPayment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cdate',
		'membership_id',
		'final_amount',
		'payment_process',
		'payment_status',
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
	),
)); ?>
