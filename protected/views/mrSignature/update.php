<?php
/* @var $this MrSignatureController */
/* @var $model MrSignature */

$this->breadcrumbs=array(
	'Mr Signatures'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrSignature', 'url'=>array('index')),
	array('label'=>'Create MrSignature', 'url'=>array('create')),
	array('label'=>'View MrSignature', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrSignature', 'url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Signature</h1>
		
    </div>
    <!-- /.col-lg-12 -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>