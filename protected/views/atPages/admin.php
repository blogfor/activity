<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

//$this->breadcrumbs=array(
//	'At Pages'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtPages', 'url'=>array('index')),
//	array('label'=>'Create AtPages', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Pages</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successPages')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successPages'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('errorPages')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('errorPages'); ?>
    </div>
<?php endif; ?>
</div>
    
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add Page', array('atPages/create'), array('class' => 'btn btn-primary')); ?>
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
	'id'=>'at-pages-grid',
	'dataProvider'=>$model->search(),
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'page_name',
		'page_slug',
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
								'url'=>'Yii::app()->createUrl("atPages/update/".$data[\'id\'])',
							),
							'Delete' => array
							(
								'label'=>'Delete',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/delete.png',
								'url'=>'Yii::app()->createUrl("atPages/delete/", array("id"=>$data[\'id\'],"returnUrl"=>Yii::app()->request->url))',
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
