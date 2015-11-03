<?php
/* @var $this AtHowItWorksController */
/* @var $model AtHowItWorks */

//$this->breadcrumbs=array(
//	'At How It Works'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtHowItWorks', 'url'=>array('index')),
//	array('label'=>'Create AtHowItWorks', 'url'=>array('create')),
//	array('label'=>'View AtHowItWorks', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtHowItWorks', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update How It Works : <?php echo $model->hwt_name; ?></h1>
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
        <?php echo CHtml::link('Add', array('atHowItWorks/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage List', array('atHowItWorks/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>