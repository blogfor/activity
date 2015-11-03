<?php
/* @var $this AtKidsActivitiesController */
/* @var $model AtKidsActivities */

//$this->breadcrumbs=array(
//	'At Kids Activities'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtKidsActivities', 'url'=>array('index')),
//	array('label'=>'Create AtKidsActivities', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-kids-activities-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Kids Activities</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successWorks')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successWorks'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('errorWorks')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('errorWorks'); ?>
    </div>
<?php endif; ?>
</div>
    
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add', array('atKidsActivities/create'), array('class' => 'btn btn-primary')); ?>
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
	'id'=>'at-how-it-works-grid',
	'dataProvider'=>$model->search(),
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'kids_name',
		'kids_description',
//		'hwt_image',
                array('name'=>'created','value'=>'getDateTimeFormat($data[\'created\'])','type'=>'html'),
                array('name'=>'modified','value'=>'getDateTimeFormat($data[\'modified\'])','type'=>'html'),
		array(
					'class'=>'CButtonColumn',
					'template'=>'{Edit}{Delete}',
					'buttons'=>array
					(
							
							'Edit' => array
							(
								'label'=>'Update',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/update.png',							
								'url'=>'Yii::app()->createUrl("atKidsActivities/update/".$data[\'id\'])',
							),
							'Delete' => array
							(
								'label'=>'Delete',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/delete.png',
								'url'=>'Yii::app()->createUrl("atKidsActivities/delete/", array("id"=>$data[\'id\'],"returnUrl"=>Yii::app()->request->url))',
								'click'=>'function(){if(confirm("Are you sure you want to delete this page?")) { return true;} else { return false;} }',
							),
                        
                        
					),
            
					'afterDelete'=>'$("#statusMsg").html(data);',
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
