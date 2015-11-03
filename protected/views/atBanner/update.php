<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */

//$this->breadcrumbs=array(
//	'At Banners'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtBanner', 'url'=>array('index')),
//	array('label'=>'Create AtBanner', 'url'=>array('create')),
//	array('label'=>'View AtBanner', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtBanner', 'url'=>array('admin')),
//);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Banner : <?php echo $model->banner_title; ?></h1>
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
        
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
        <?php echo CHtml::link('Add Banner', array('atBanner/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage List', array('atBanner/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>