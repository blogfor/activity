<?php
/* @var $this MrUsersController */
/* @var $model MrUsers */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mr-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-lg-2" style="float: right;">
            <?php echo CHtml::link('Create User', array('mrUsers/create'), array('class' => '')); ?>
        </div>
        
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

                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'mr-users-grid',
                    'dataProvider'=>$model->search(),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns'=>array(
                        'id',
                        'username',
                        /*'password',*/
                        'email',
                        'firstname',
                        'lastname',		
                        'address1',
                        'sex',
                        'office_phone',
                        'home_phone',
                        'zipcode',
                        'create_at',
                        'lastvisit_at',
                        'superuser',
                        'status',
                        /*'createdby',
                        'modifiedby',*/

                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{Edit},{Delete}',
                            'buttons' => array
                                (
                                'Edit' => array
                                    (
                                    //'visible'=>'$data[regv_id] <= 0',
                                    'label' => 'Update',
                                    'imageUrl' => Yii::app()->request->baseUrl . '/themes/marine/img/icons/update.png',
                                    'url' => 'Yii::app()->createUrl("mrUsers/update/$data[id]")',
                                ),
                                'Delete' => array
                                    (
                                    //'visible'=>'$data[regv_id] <= 0',
                                    'label' => 'Update',
                                    'imageUrl' => Yii::app()->request->baseUrl . '/themes/marine/img/icons/delete.png',
                                    'url' => 'Yii::app()->createUrl("mrUsers/delete/$data[id]")',
                                ),
                            ),
                        ),
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
