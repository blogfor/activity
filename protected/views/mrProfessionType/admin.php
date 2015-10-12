<?php
/* @var $this MrProfessionTypeController */
/* @var $model MrProfessionType */

$this->breadcrumbs=array(
	'Mr Profession Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MrProfessionType', 'url'=>array('index')),
	array('label'=>'Create MrProfessionType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mr-profession-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Route of Entry</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<?php // echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">
<?php 
//// $this->renderPartial('_search',array(
//	'model'=>$model,
// )); 
?>
</div> search-form -->


<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Create New', array('mrProfessionType/create'), array('class' => '')); ?>
    </div>
    
            <div class="panel-body">
            <div class="dataTable_wrapper">
                <?php 
                $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'mr-profession-type-grid',
                        'dataProvider'=>$model->search(),
                        'filter'=>$model,
                        'columns'=>array(
                                'id',
                                'profession_type',
                                array(
                                        'class'=>'CButtonColumn',
                                ),
                        ),
                )); 
                ?>
                </div>
            </div>
                
</div>
