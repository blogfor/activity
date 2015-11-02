<?php
/* @var $this AtPagesController */
/* @var $model AtPages */
//
//$this->breadcrumbs=array(
//	'At Pages'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List AtPages', 'url'=>array('index')),
//	array('label'=>'Manage AtPages', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Page</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>