<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */

//$this->breadcrumbs=array(
//	'Mr Students'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List MrStudents', 'url'=>array('index')),
//	array('label'=>'Create MrStudents', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mr-students-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Students</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Create Student', array('mrStudents/create'), array('class' => '')); ?>
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
	'id'=>'mr-students-grid',
	'dataProvider'=>$model->search(),
	 'itemsCssClass' => 'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id',
		'firstname',
		'lastname',
		'dob',
		/*'address',
		'city',
		
		'state',
		'zip',
                 */
		'email',
		'mobile',
		'CDCNO',
		'INDOSNO',
//		'passportno',
//		'certificate',
//		'routeofentry',
//		'status',
		'created',
//		'modified',
		
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