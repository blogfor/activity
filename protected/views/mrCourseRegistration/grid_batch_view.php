<?php
/* @var $this MrCourseRegistrationController */
/* @var $model MrCourseRegistration */

$request_class=$_REQUEST['class'];

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MrCourseRegistration', 'url'=>array('index')),
	array('label'=>'Create MrCourseRegistration', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
//$('.search-form form').submit(function(){
//	$('#mr-course-registration-grid').yiiGridView('update', {
//		data: $(this).serialize()
//	});
//	return false;
//});
");
?>





<?php // echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
//$this->renderPartial('_search',array(
//	'model'=>$model,
//)); 
?>
</div><!-- search-form -->

<?php 
//$this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'mr-course-registration-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'id',
//		'course_id',
//		'student_id',
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//)); 
//        
?>




<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Registrations</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('New Registration', array('mrCourseRegistration/create'), array('class' => '')); ?>
    </div>

    <div class="col-lg-12" >
        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
        <div class="search-form" style="display:none">
          
            <?php
//            $this->renderPartial('_search', array(
//                'model' => $model,
//            ));
            ?>
        </div><!-- search-form -->
        <div class="panel-body">
            <div class="dataTable_wrapper">

                <script type="text/javascript">

                    function submitCourselist(frmid)
                    {

                   
                        $('#course-registration-grid').html($('#pre_loader_course').html());
                        //fun_Open_adv();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/batch'); ?>",
                            data: $("#" + frmid).serialize() + "&ajaxPagin=true&class=<?php echo $request_class; ?>", // serializes the form's elements.
                            success: function(msg)
                            {
                                $('#course-registration-grid').html(msg);
                            }
                        });

                        return false; // avoid to execute the actual submit of the form.

                    }

                    $(document).ready(function() {

                        $('#course-registration-grid').html($('#pre_loader_course').html());
                        $.ajax({
                            type: "POST",
                            url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/batch'); ?>",
                            data: "ajaxPagin=true&page=1&class=<?php echo $request_class; ?>",
                            success: function(msg) {
                                //$('#pre_loader_project').hide();
                                $('#course-registration-grid').html(msg);
                            }
                        });
                    });

                </script>
                
                
                <div id="pre_loader_course" style="margin: auto 50%;padding: 5px 5px; display: none;" >
                    <div class="windows8">
                        <div class="wBall" id="wBall_1">
                            <div class="wInnerBall">
                            </div>
                        </div>
                        <div class="wBall" id="wBall_2">
                            <div class="wInnerBall">
                            </div>
                        </div>
                        <div class="wBall" id="wBall_3">
                            <div class="wInnerBall">
                            </div>
                        </div>
                        <div class="wBall" id="wBall_4">
                            <div class="wInnerBall">
                            </div>
                        </div>
                        <div class="wBall" id="wBall_5">
                            <div class="wInnerBall">
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="grid-view" id="course-registration-grid"></div>

                <?php
//                $this->widget('zii.widgets.grid.CGridView', array(
//                    'id' => 'mr-course-registration-grid',
//                    'dataProvider' => $model->search(),
//                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
//                    'columns' => array(
//                        'id',
//                        'course_name',
//                        'course_abbr',
//                        'level',
//                        'course_fees',
//                        'status',
//                        array(
//                            'class' => 'CButtonColumn',
//                        ),
//                    ),
//                ));
                ?>

            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    
</div>
<!-- /.row -->

