<?php
/* @var $this MrClassController */
/* @var $model MrClass */

//$this->breadcrumbs=array(
//	'Mr Classes'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List MrClass', 'url'=>array('index')),
//	array('label'=>'Create MrClass', 'url'=>array('create')),
//	array('label'=>'Update MrClass', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MrClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MrClass', 'url'=>array('admin')),
//);
?>
<?php if (Yii::app()->user->hasFlash('mrClassAdd')): ?>
    <div class="alert alert-success"> <?php echo Yii::app()->user->getFlash('mrClassAdd'); ?> </div>
<?php endif; ?>
<h1>View Class #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
             array
                (
                        'name'=>'course_id',
                        'type'=>'raw',
                        'value'=>MrCourse::model()->findByPk($model->course_id)->course_name
                ),
		'class_details',
		'schedule',
             array('name' => 'start_date', 'value' => $this->getDateFormat($model->start_date),),
             array('name' => 'end_date', 'value' => $this->getDateFormat($model->end_date),),
		'capacity',
		'status',
	),
)); ?>
