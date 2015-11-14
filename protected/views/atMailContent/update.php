<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */

//$this->breadcrumbs=array(
//	'At Mail Contents'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtMailContent', 'url'=>array('index')),
//	array('label'=>'Create AtMailContent', 'url'=>array('create')),
//	array('label'=>'View AtMailContent', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtMailContent', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Mail Content <?php echo $model->id; ?></h1>
        <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successMail')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successMail'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('successMail')):?>
    <div class="errorMessage">
        <?php echo Yii::app()->user->getFlash('successMail'); ?>
    </div>
<?php endif; ?>
</div>
        
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
        <?php echo CHtml::link('Manage List', array('atMailContent/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
