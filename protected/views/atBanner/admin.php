<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */

//$this->breadcrumbs=array(
//	'At Banners'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtBanner', 'url'=>array('index')),
//	array('label'=>'Create AtBanner', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-banner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Banners</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add Banner', array('atBanner/create'), array('class' => '')); ?>
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
	'id'=>'at-banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'banner_title',
		'banner_description',
		'banner_link',
		'banner_order',
		'status',
		/*
		'added',
		'modified',
		*/
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