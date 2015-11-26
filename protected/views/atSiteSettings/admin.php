<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */

//$this->breadcrumbs=array(
//	'At Site Settings'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtSiteSettings', 'url'=>array('index')),
//	array('label'=>'Create AtSiteSettings', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-site-settings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Site Settings</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Update', array('atSiteSettings/update/1'), array('class' => '')); ?>
    </div>

    <div class="col-lg-12">
        <?php //echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
        <div class="search-form" style="display:none">
            <?php
//            $this->renderPartial('_search', array(
//                'model' => $model,
//            ));
            ?>
        </div><!-- search-form -->
        <div class="panel-body">
            <div class="dataTable_wrapper">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'at-site-settings-grid',
	'dataProvider'=>$model->search(),
    'itemsCssClass' => 'table table-striped table-bordered table-hover',
//	'filter'=>$model,
	'columns'=>array(
		'id',
		'site_address',
		'site_phone',
		'site_email',
                'site_email_from',
		'site_fb',
		'site_gplus',
		
		'site_twitter',
                'site_registration_email',
		'site_partner_inquiry_email',
		'paypal_pro_user_name',
		'paypal_pro_password',
		'paypal_pro_api_signature',
		
		array(
			'class'=>'CButtonColumn',
            'template'=>'{View}{Update}',
            'header'=>'Action',
					'buttons'=>array
					(
							'View' => array
							(
								'label'=>'View',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/view.png',
								'url'=>'Yii::app()->createUrl("atSiteSettings/view/$data[id]")',
							),
							'Update' => array
							(
								'label'=>'Update',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/update.png',
								'url'=>'Yii::app()->createUrl("atSiteSettings/update/$data[id]")',
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
