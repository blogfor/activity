<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */

//$this->breadcrumbs=array(
//	'At Authvalues'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtAuthvalue', 'url'=>array('index')),
//	array('label'=>'Create AtAuthvalue', 'url'=>array('create')),
//	array('label'=>'View AtAuthvalue', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtAuthvalue', 'url'=>array('admin')),
//);
?>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Membership <?php echo $model->id; ?></h1>
               
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
       
         <?php echo CHtml::link('Manage Membership', array('atAuthvalue/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>