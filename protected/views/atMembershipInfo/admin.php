<?php
/* @var $this AtMembershipInfoController */
/* @var $model AtMembershipInfo */

//$this->breadcrumbs=array(
//	'At Membership Infos'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List AtMembershipInfo', 'url'=>array('index')),
//	array('label'=>'Create AtMembershipInfo', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-membership-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Membership Information</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">




    <div class="col-lg-12">
        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
        <div class="panel-body">
            <div class="dataTable_wrapper">



                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'at-membership-info-grid',
                    'dataProvider' => $model->search(),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        'id',
                        array('name' => 'payment_c_date', 'value' => 'getDateTimeFormat($data[\'payment_c_date\'])', 'type' => 'html'),
                        array('name' => 'todate', 'value' => 'getDateTimeFormat($data[\'todate\'])', 'type' => 'html'),
                        array('name' => 'fromdate', 'value' => 'getDateTimeFormat($data[\'fromdate\'])', 'type' => 'html'),
                        'membership_title',
                        array('name' => 'user_id', 'value' => array($this, 'gridUserName'), 'type' => 'html'),
                        'membership_note',
                    ),
                ));
                ?>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->