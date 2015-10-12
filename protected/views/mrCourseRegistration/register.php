<?php
/* @var $this MrStudentsController */
/* @var $model MrStudents */

//$this->breadcrumbs=array(
//	'Mr Students'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List MrStudents', 'url'=>array('index')),
//	array('label'=>'Manage MrStudents', 'url'=>array('admin')),
//);
?>

<style>
    .appForm{
        width: 100%;
           
    }
    .appForm td{
        border: 1px #000 solid;
        padding-left: 5px;
        line-height: 25px;
        vertical-align:top;
    }
    td.srl{
        width: 30px;
    }
    td.app_label{
        width: 40%; 
    }
</style>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admission Form</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php 
$this->renderPartial('_register_student_details',array('model'=>$model)); 
?>







