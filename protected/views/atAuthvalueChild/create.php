<?php
/* @var $this AtAuthvalueChildController */
/* @var $model AtAuthvalueChild */

//$this->breadcrumbs=array(
//	'At Authvalue Children'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List AtAuthvalueChild', 'url'=>array('index')),
//	array('label'=>'Manage AtAuthvalueChild', 'url'=>array('admin')),
//);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Membership</h1>
               
       
    </div>
    <!-- /.col-lg-12 -->
     <div class="col-lg-4" style="float: right;">
        <?php echo CHtml::link('Add Membership', array('atAuthvalueChild/create'), array('class' => 'btn btn-primary')); ?>
         <?php echo CHtml::link('Manage Membership', array('atAuthvalueChild/admin'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>