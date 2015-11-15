<?php
/* @var $this AtUsersController */
/* @var $model AtUsers */

$this->breadcrumbs=array(
	'At Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AtUsers', 'url'=>array('index')),
	array('label'=>'Create AtUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#at-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<!--CHILD DETAILS MODAL-->
<div id="emailModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Email</h4>
      </div>
        <form method="POST" name="emailform"  id="emailform" action="<?php echo Yii::app()->createUrl('atUsers/emailformsubmit'); ?>" >
        <div class="modal-body popup-child-list">

        </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<script>

    $( document ).ready(function() {
        $(".send_email").on('click',function(){
           var userid=$(this).attr('title');
           
            $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('atUsers/emailform'); ?>",
            data:{userid:userid, usertype:'partner' },
            success: function(msg) {    
               
                $(".popup-child-list").html(msg);
               // $("#childModalbtn").click();
                 $('#emailModal').modal('show');
            }
            });

           
           
        });
    });
</script>
    



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Partners</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->



<div class="row">
    <div id="statusMsg">
    <?php if(Yii::app()->user->hasFlash('successUsers')):?>
    <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash('successUsers'); ?>
    </div>
    <?php endif; ?>
    <?php if(Yii::app()->user->hasFlash('errorUsers')):?>
    <div class="errorMessage">
            <?php echo Yii::app()->user->getFlash('errorUsers'); ?>
    </div>
    <?php endif; ?>
    </div>
    
    
     <?php if(Yii::app()->user->hasFlash('successMailPartner')):?>
    <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash('successMailPartner'); ?>
    </div>
    <?php endif; ?>
    
    
    
    
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Add User', array('AtUsers/create'), array('class' => 'btn btn-primary')); ?>
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
	'id'=>'at-users-grid',
	'dataProvider'=>$model->search_partner(),
        'itemsCssClass' => 'table table-striped table-bordered table-hover',    
	/*'filter'=>$model,*/
        'columns'=>array(
		'id',
		'firstname',
		'lastname',
                'email',
                array('name'=>'Send Email','value' =>array($this,'gridgeSendEmail'),'type'=>'html'),
            
//            array('name'=>'created','value'=>'getDateTimeFormat($data[\'created\'])','type'=>'html'),
//            array('name'=>'modified','value'=>'getDateTimeFormat($data[\'modified\'])','type'=>'html'),
//		
		array(
                        'class'=>'CButtonColumn',
                        'template'=>'{Edit}{Delete}',
                        'buttons'=>array
                        (
                            'Edit' => array
                            (
                                    'label'=>'Update',
                                    'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/update.png',							
                                    'url'=>'Yii::app()->createUrl("AtUsers/update/".$data[\'id\'])',
                            ),
                            'Delete' => array
                            (
                                    'label'=>'Delete',
                                    'imageUrl'=>Yii::app()->request->baseUrl.'/themes/admin/img/icons/delete.png',
                                    'url'=>'Yii::app()->createUrl("AtUsers/delete/", array("id"=>$data[\'id\'],"returnUrl"=>Yii::app()->request->url))',
                                    'click'=>'function(){if(confirm("Are you sure you want to delete this page?")) { return true;} else { return false;} }',
                            ),

                        ),

                        'afterDelete'=>'$("#statusMsg").html(data);',
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