<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

//$this->breadcrumbs=array(
//	'At Pages'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List AtPages', 'url'=>array('index')),
//	array('label'=>'Create AtPages', 'url'=>array('create')),
//	array('label'=>'Update AtPages', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete AtPages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage AtPages', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Page: <?php echo $model->page_name; ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add Page', array('atPages/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage Page', array('atPages/admin'), array('class' => 'btn btn-primary')); ?>
    </div>

    <div class="col-lg-12">
      
        <div class="panel-body">
            <div class="dataTable_wrapper">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page_name',
		'page_description',
		'created',
		'modified',
	),
)); ?>
              
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
