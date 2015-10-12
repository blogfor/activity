<?php
/* @var $this MrCourseController */
/* @var $model MrCourse */

//$this->breadcrumbs=array(
//	'Mr Courses'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List MrCourse', 'url'=>array('index')),
//	array('label'=>'Create MrCourse', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
//$('.search-form form').submit(function(){
//	$('#mr-course-grid').yiiGridView('update', {
//		data: $(this).serialize()
//	});
//	return false;
//});
");
?>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Courses</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2" style="float: right;">
        <?php echo CHtml::link('Create Course', array('mrCourse/create'), array('class' => '')); ?>
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

                <script type="text/javascript">

                    function submitCourselist(frmid)
                    {

                   
                        $('#course-grid').html($('#pre_loader_course').html());
                        //fun_Open_adv();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo Yii::app()->createUrl('mrCourse/admin'); ?>",
                            data: $("#" + frmid).serialize() + "&ajaxPagin=true", // serializes the form's elements.
                            success: function(msg)
                            {
                                $('#course-grid').html(msg);
                            }
                        });

                        return false; // avoid to execute the actual submit of the form.

                    }

                    $(document).ready(function() {

                        $('#course-grid').html($('#pre_loader_course').html());
                        $.ajax({
                            type: "POST",
                            url: "<?php echo Yii::app()->createUrl('mrCourse/admin'); ?>",
                            data: "ajaxPagin=true&page=1",
                            success: function(msg) {
                                //$('#pre_loader_project').hide();
                                $('#course-grid').html(msg);
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

                <div class="grid-view" id="course-grid"></div>

                <?php
//                $this->widget('zii.widgets.grid.CGridView', array(
//                    'id' => 'mr-course-grid',
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