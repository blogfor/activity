<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */

//$this->breadcrumbs=array(
//	'At Authvalues'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtAuthvalue', 'url'=>array('index')),
//	array('label'=>'Create AtAuthvalue', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-authvalue-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Membership</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successBanner')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successBanner'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('errorBanner')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('errorBanner'); ?>
    </div>
<?php endif; ?>
</div>
    
  

    <div class="col-lg-12">
        <?php //echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
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
	'id'=>'at-authvalue-grid',
	'dataProvider'=>$model->search(),
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'name',
		'value',
		'membership_desc',
		'number_of_reg',
//		'is_active',
		/*
		'membership_duration',
		*/
		array(
					'class'=>'CButtonColumn',
					'template'=>'{Edit}',
					'buttons'=>array
					(
							
							'Edit' => array
							(
								'label'=>'Update',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/update.png',							
								'url'=>'Yii::app()->createUrl("atAuthvalue/update/".$data[\'id\'])',
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
