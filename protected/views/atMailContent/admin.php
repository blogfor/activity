<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */

//$this->breadcrumbs=array(
//	'At Mail Contents'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtMailContent', 'url'=>array('index')),
//	array('label'=>'Create AtMailContent', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-mail-content-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Mail Contents</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successMail')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successMail'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('errorMail')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('errorMail'); ?>
    </div>
<?php endif; ?>
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
	'id'=>'at-mail-content-grid',
	'dataProvider'=>$model->search(),
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'module_name',
		'mail_subject',
		'mail_content',
//		'cdate',
		'mail_footer',
		array(
					'class'=>'CButtonColumn',
					'template'=>'{Edit}',
					'buttons'=>array
					(
							
							'Edit' => array
							(
								'label'=>'Update',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/update.png',							
								'url'=>'Yii::app()->createUrl("atMailContent/update/".$data[\'id\'])',
							),
							
                        
                        
					),
            
					
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
