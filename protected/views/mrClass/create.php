<?php
/* @var $this MrClassController */
/* @var $model MrClass */

//$this->breadcrumbs=array(
//	'Mr Classes'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List MrClass', 'url'=>array('index')),
//	array('label'=>'Manage MrClass', 'url'=>array('admin')),
//);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Class</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>