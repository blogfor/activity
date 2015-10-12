<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */

$this->breadcrumbs=array(
	'Mr Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrStudents', 'url'=>array('index')),
	array('label'=>'Create MrStudents', 'url'=>array('create')),
	array('label'=>'View MrStudents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrStudents', 'url'=>array('admin')),
);


?>

<h1>Update Student <?php //echo $model->id; ?></h1>
<p>Please update the student details if you want to change.</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>