<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

//$this->breadcrumbs=array(
//	'At Pages'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtPages', 'url'=>array('index')),
//	array('label'=>'Create AtPages', 'url'=>array('create')),
//	array('label'=>'View AtPages', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtPages', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Page : <?php echo $model->page_name; ?></h1>
        <div id="statusMsg">
            <?php if (Yii::app()->user->hasFlash('successPages')): ?>
                <div class="alert alert-success">
                    <?php echo Yii::app()->user->getFlash('successPages'); ?>
                </div>
            <?php endif; ?>
            <?php if (Yii::app()->user->hasFlash('errorPages')): ?>
                <div class="errorMessage">
                    <?php echo Yii::app()->user->getFlash('errorPages'); ?>
                </div>
            <?php endif; ?>
        </div>
        
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
        <?php echo CHtml::link('Add Page', array('atPages/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage Page', array('atPages/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>