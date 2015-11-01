<?php
/* @var $this AtSiteSettingsController */
/* @var $model AtSiteSettings */

//$this->breadcrumbs=array(
//	'At Site Settings'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List AtSiteSettings', 'url'=>array('index')),
//	array('label'=>'Create AtSiteSettings', 'url'=>array('create')),
//	array('label'=>'View AtSiteSettings', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage AtSiteSettings', 'url'=>array('admin')),
//);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Site Settings</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>