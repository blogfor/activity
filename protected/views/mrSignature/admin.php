<?php
/* @var $this MrSignatureController */
/* @var $model MrSignature */

//$this->breadcrumbs=array(
//	'Mr Signatures'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List MrSignature', 'url'=>array('index')),
//	array('label'=>'Create MrSignature', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mr-signature-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Signatures</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Create Signature', array('mrSignature/create'), array('class' => '')); ?>
    </div>

    <div class="col-lg-12">
    
        <div class="panel-body">
            <div class="dataTable_wrapper">




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mr-signature-grid',
	'dataProvider'=>$model->search(),
     'itemsCssClass' => 'table table-striped table-bordered table-hover',
//	'filter'=>$model,
	'columns'=>array(
		'id',
		
		'signature_category',
                'name',
//                array('name' => 'images_name','value'=>array($this,'images_nameReturn'),'type' => 'raw'),
//		'created',
//		'modified',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

