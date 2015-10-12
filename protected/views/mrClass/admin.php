<?php
/* @var $this MrClassController */
/* @var $model MrClass */

//$this->breadcrumbs=array(
//	'Mr Classes'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List MrClass', 'url'=>array('index')),
//	array('label'=>'Create MrClass', 'url'=>array('create')),
//;)

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mr-class-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Classes</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Create Class', array('mrClass/create'), array('class' => '')); ?>
    </div>

    <div class="col-lg-12">
        <?php  echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
             <div class="search-form" style="display:none">
            <?php
			
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
			
            ?>
        </div><!-- search-form -->
        <div class="panel-body">
            <div class="dataTable_wrapper">


<?php 
$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'mr-class-grid',
		'dataProvider'=>$model->search(),
		'itemsCssClass' => 'table table-striped table-bordered table-hover',
		'columns'=>array(
			'id',
                            array('name' => 'course_id', 'value' =>array($this,'gridCourseName'), 'type' => 'html'),
			'class_details',
			'schedule',
                            array('name' => 'start_date', 'header' => 'Start Date', 'value' =>array($this,'gridgetDateFormatStart'), 'type' => 'html'),
                            array('name' => 'end_date', 'header' => 'End Date', 'value' =>array($this,'gridgetDateFormatEnd'), 'type' => 'html'),
			/*
			'capacity',
			'status',
			*/
		   //'capacity',
		   // array('name'=>'capacity','value'=>CHtml::encode($model->getStatusText($model->search()->getKeys()))),
			array('name' => 'capacity', 'header' => 'Capacity/Fillup', 'value' =>array($this,'gridgeCountReservation'), 'type' => 'html'),
                        array('name' => 'students', 'header' => 'Students', 'value' =>array($this,'gridStudents'), 'type' => 'html'),
			array(
                            'class'=>'CButtonColumn',
			),
		),
	)); 

?>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->