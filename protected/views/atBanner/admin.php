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
    
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add Banner', array('atBanner/create'), array('class' => 'btn btn-primary')); ?>
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
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'banner_title',
//		'banner_description',
//		'banner_link',
//		'banner_order',
             array('name'=>'status','type'=>'raw', 'value'=>array($this,'gridStatus')),
	        array('name'=>'added','value'=>'getDateTimeFormat($data[\'added\'])','type'=>'html'),
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
								'url'=>'Yii::app()->createUrl("atBanner/update/".$data[\'id\'])',
							),
							'Delete' => array
							(
								'label'=>'Delete',
								'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/delete.png',
								'url'=>'Yii::app()->createUrl("atBanner/delete/", array("id"=>$data[\'id\'],"returnUrl"=>Yii::app()->request->url))',
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
<script type="text/javascript">
function statusChange(id)
{
    $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('atBanner/statuschange'); ?>",
                data: "id="+ id,
                success: function(msg) {

                    if (msg === '1') {
                        //alert('The mail notifications have been update');
                            if($('#span-id-'+id).hasClass('label-info'))
                            {
                                $('#span-id-'+id).removeClass('label-info');
                                $('#span-id-'+id).addClass('label-warning');
                                $('#span-id-'+id).text('No');
                            }
                            else
                                {
                                    
                                $('#span-id-'+id).removeClass('label-warning');
                                $('#span-id-'+id).addClass('label-info');
                                $('#span-id-'+id).text('Yes');
                                }
                        return true;
                    }
                   
                }
            });
}
</script>