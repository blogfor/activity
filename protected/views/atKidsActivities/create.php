<?php
/* @var $this AtKidsActivitiesController */
/* @var $model AtKidsActivities */

//$this->breadcrumbs=array(
//	'At Kids Activities'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List AtKidsActivities', 'url'=>array('index')),
//	array('label'=>'Manage AtKidsActivities', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Kids Activities</h1>
        <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successWorks')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successWorks'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('errorWorks')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('errorWorks'); ?>
    </div>
<?php endif; ?>
</div>
        
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
        <?php echo CHtml::link('Add', array('atKidsActivities/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage List', array('atKidsActivities/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>