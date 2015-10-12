<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */

//$this->breadcrumbs=array(
//	'Mr Students'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List MrStudents', 'url'=>array('index')),
//	array('label'=>'Create MrStudents', 'url'=>array('create')),
//	array('label'=>'Update MrStudents', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MrStudents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MrStudents', 'url'=>array('admin')),
//);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="width: 300px; float: left;">Student's Details<?php //echo $model->id; ?></h1>
        
        <a href="<?php echo Yii::app()->createUrl('mrCourseRegistration/register'); ?>" style="line-height:40px; float: right;"> Register in a course </a>
    </div>
</div>

<?php Yii::app()->session['student_reg']=$model->CDCNO; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
               array('name' => 'dob', 'value' => $this->getDateFormat($model->dob),),
		'address',
		'city',
		'state',
		'zip',
		'email',
		'mobile',
		'CDCNO',
		'INDOSNO',
		'passportno',
		'certificate',
		'routeofentry',
                array
                (
                        'name'=>'routeofentry',
                        'type'=>'raw',
                        'value'=>MrProfessionType::model()->findByPk($model->routeofentry)->profession_type
                ),
//		'status',
//		'created',
//		'modified',
	),
)); ?>

<br clear="all" />
<div style="padding:10px; margin:0px auto; width:250px;">
<a href="<?php echo Yii::app()->createUrl('mrCourseRegistration/register'); ?>" style="line-height:40px"> Register for a course </a>
</div>
