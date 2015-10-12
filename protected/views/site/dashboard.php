<?php
$baseUrl = Yii::app()->theme->baseUrl;
//echo "<pre>";
//print_r($model);

?>
<script>
    function runScript(e) {
        if (e.keyCode == 13) {        
            window.search_frm.submit();       
        }
    }
</script>
   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard 
                        <form action="<?php echo Yii::app()->createUrl('//site/dashboardsearch');?>"  method="POST" name="search_frm" id="search_frm" style="  display: inline !important;" on>
                        <input type="text" name="dashboard_search" style="float:right; font-size: 14px; width: 40%; line-height: 30px;" placeholder="CDC NO/Passport No/INDOS No." onkeypress="return runScript(event)" >
                        </form>
                    </h1>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo count($tot_reg);?></div>
                                    <div>New Resistration!</div>
                                </div>
                            </div>
                        </div>
                         <?php echo CHtml::link(' <div class="panel-footer">
                                <span class="pull-left">View Registrations</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>', array('mrCourseRegistration/admin'), array('class' => '')); ?>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo count($model);?></div>
                                    <div>Ongoing Classes!</div>
                                </div>
                            </div>
                        </div>
                        <?php echo CHtml::link(' <div class="panel-footer">
                                <span class="pull-left">View Classes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>', array('mrClass/admin'), array('class' => '')); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo count($students);?></div>
                                    <div>Students!</div>
                                </div>
                            </div>
                        </div>
                        <?php echo CHtml::link(' <div class="panel-footer">
                                <span class="pull-left">View Classes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>', array('mrStudents/admin'), array('class' => '')); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo count($course);?></div>
                                    <div>View Courses!</div>
                                </div>
                            </div>
                        </div>
                           <?php echo CHtml::link(' <div class="panel-footer">
                                <span class="pull-left">View Courses</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>', array('mrCourse/admin'), array('class' => '')); ?>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Classes for today
<!--                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                        
                        <div class="panel-body">
                            <div>
                              

                                <table class="table table-striped table-bordered table-hover" id="reservation-list">
                                    <thead>
                                        <tr>
<!--                                            <th> ID</th>-->
                                            <th>Course Name</th>
                                            <th>Class Details</th>
                                            <th>Student's Details(ID)</th>
                                            <th>Batch Date</th>
                                  
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (count($model)) {
                                            foreach ($model as $data) {
                                                
                                              //print_r($data); 
                                                echo '<tr>';
                                               // echo '<td>' . $data['id'] . '</td>';
                                                echo '<td>' . $this->stripJunk($data['course_name']) . '</td>';
                                                echo '<td>' . $this->stripJunk($data['class_details']) . '</td>';
                                                echo '<td>' . $this->stripJunk($data['schedule']).'</td>';
                                                echo '<td>' . $this->stripJunk(date("d-M-Y",strtotime($data['start_date'])))." To ".$this->stripJunk(date("d-M-Y",strtotime($data['end_date']))). '</td>';
                                            
                                                echo '</tr>';
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="13">No Class is scheduled for today.</td>
                                            </tr>

                                            <?php
                                        }
                                        ?>
                                    </tbody>

                                </table>
                                
                            </div>
                        </div>
                        
                    </div>
                     
                </div>
                
            </div
            <!-- /.row -->
