<?php
/* @var $this MrUsersController */
/* @var $model MrUsers */

$this->breadcrumbs=array(
	'Mr Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MrUsers', 'url'=>array('index')),
	array('label'=>'Manage MrUsers', 'url'=>array('admin')),
);
?>


 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
