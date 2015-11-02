<?php
/* @var $this AtActivityController */
/* @var $model AtActivity */

//$this->breadcrumbs=array(
//	'At Activities'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtActivity', 'url'=>array('index')),
//	array('label'=>'Create AtActivity', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-activity-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Activities</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add Activity', array('atActivity/create'), array('class' => '')); ?>
    </div>

    <div class="col-lg-12">
        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
        <div class="panel-body">
            <div class="dataTable_wrapper">


               <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'at-activity-grid',
	'dataProvider'=>$model->search(),
    'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'filter'=>$model,
	'columns'=>array(
		'id',
		'activity_name',
		'activity_description',
		'activity_image',
		'created',
		'modified',
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