<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<script>
function runScript(e) {
    if (e.keyCode == 13) {        
        window.search_frm.submit();       
    }
}
</script>

<style>
    .btn-status {
        margin-right: 7px;        
        padding: 1px 3px;        
    } 
    
    .success{
        background-color: green;
        color: #fff;
    }
    .error{
        background-color: red;
        color: #fff;
    }
</style>
   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Search 
                        <form action="<?php echo Yii::app()->createUrl('//site/dashboardsearch');?>"  method="POST" name="search_frm" id="search_frm" style="  display: inline !important;" on>
                        <input type="text" value="<?php if(isset($_POST['dashboard_search'])) echo $_POST['dashboard_search'];?>" name="dashboard_search" style="float:right; font-size: 14px; width: 70%; line-height: 30px;" placeholder="CDC NO/Passport No/INDOS No." onkeypress="return runScript(event)" >
                        </form>
                    </h1>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Search Result
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
<!--                                            <th> SL.</th>-->
                                            <th>Student's Details</th>
                                            <th>Course Details</th>
<!--                                        <th>Course Name</th>
                                            <th>Action</th>-->                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       // print_r($model);
                                        if (count($model)) {
                                            foreach ($model as $data) {
                                                
                                              //print_r($data); 
                                                echo '<tr>';
                                               // echo '<td>' . $data['id'] . '</td>';
                                                echo '<td width="50%"> ' . $this->stripJunk($data['course_name']);
                                                ?>
                                                        <table style="float:left; width:60%;" border="0">
                                                            <tr>
                                                                <td style="width:150px;"> Name </td>
                                                                <td><?php echo $data['firstname']." ".$data['lastname']; ?> </td>
                                                            </tr>

                                                            <tr>
                                                                <td> DOB. </td>
                                                                <td><?php echo $data['dob']; ?> </td>
                                                            </tr>

                                                            <tr>
                                                                <td valign="top">Address </td>
                                                                <td><?php echo $data['address']; ?> 
                                                                    <br>City: <?php echo $data['city']; ?>
                                                                    <br>State: <?php echo $data['state']; ?> 
                                                                    <br>ZIP: <?php echo $data['zip']; ?> 
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td> Email </td>
                                                                <td><?php echo $data['email']; ?> </td>
                                                            </tr>

                                                            <tr>
                                                                <td> Mobile </td>
                                                                <td><?php echo $data['mobile']; ?> </td>
                                                            </tr>


                                                        </table>

                                                        <table style="float:right; width:40%;"  border="0">
                                                            <tr>
                                                                <td> Passport </td>
                                                                <td> <?php echo $data['passportno']; ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Issued From</td>
                                                                <td> <?php if(empty($data['passport_issue_from'])) echo "INDIA"; else echo $data['passport_issue_from']; ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Indos No.</td>
                                                                <td> <?php echo $data['INDOSNO']; ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> CDC No. </td>
                                                                <td> <?php echo $data['CDCNO']; ?> </td>
                                                            </tr>
                                                        </table>                                        
                                                <?php
                                                echo '</td>';
                                                
                                                echo '<td width="50%"> ' . $this->stripJunk($data['course_name']);
                                                $reg_data=$this->search_registration($data['id']);
                                                
                                                
                                                
                                                //print_r($reg_data);
                                                //$reg_data['course_abbr']
//                                                
//                                                $reg_data['course_fees']
//                                                $reg_data['creat_date']
//                                                $reg_data['schedule']
                                                //
                                                
                                                echo '<table style="float:left;">';
                                                foreach ($reg_data as $data){
                                                    $cirtificaTION="<a title='Cirtificate Edit' href='".Yii::app()->createUrl('mrCourseRegistration/cirtification/'.$data['regid'].'')."'>Cirtificate</a>";
                                                    $payment="<a title='Payment Edit' href='".Yii::app()->createUrl('mrCourseRegistration/payment/'.$data['regid'].'')."'>Payment</a>";
                                                    $tot_amt=$this->search_payments($data['regid']);
                                                   
                                                    if((int)$tot_amt['tot_amt']<(int)$data['course_fees']) {
                                                        $str="Due";
                                                        $class="error";
                                                    }
                                                    else{
                                                        $str="Cleared";
                                                        $class="success";
                                                    }   
                                                    
                                                    
                                                   // print_r($reg_data['creat_date']);
                                                ?>
                                                    <tr style="border:1px solid #ccc; ">
                                                        <td style=" padding: 5px;"><b>COURSE:</b><?php echo $data['course_name']." ".$data['level']; ?> <br>
                                                        <b>CLASS:</b><?php echo $data['class_details'].", ".$data['schedule']; ?>                                                         
                                                        <br>
                                                        <span class="btn-status <?php if($data['cirtificate_status']=="I") echo "error"; else echo "success"; ?>">Course <?php if($data['cirtificate_status']=="I") echo "Incomplete"; else echo "Completed"; ?> </span>  
                                                        <span class="btn-status <?php echo $class;?>" >Payment <?php echo $str;?> </span>
                                                        <?php echo date("d-m-Y",strtotime($data['creat_date'])); ?>
                                                        </td>
                                                        <td style=" padding: 5px; line-height: 30px;">  
                                                        <?php echo $payment;?> <br>
                                                        <?php echo $cirtificaTION;?>                                                            
                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                                echo '</table>';
                                                echo '</td>';
                                               // echo '<td>' . $this->stripJunk($data['schedule']).'</td>';
                                               // echo '<td>' . $this->stripJunk(date("d-M-Y",strtotime($data['start_date'])))." To ".$this->stripJunk(date("d-M-Y",strtotime($data['end_date']))). '</td>';                                            
                                                echo '</tr>';
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="13">Sorry! No record is available</td>
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
