<?php
$dataArray = $data['data'];
$pagination = $data['pagination'];
$sort = $data['orderby'];
$totaldata = $data['totalCount'];
$position = $data['position'];
$q = isset($data['q']) ? $data['q'] : '';
$request_class=$_REQUEST['class'];
?>
<script type="text/javascript">
    function deleteA()
    {
        if (confirm("Are you sure you want to delete this course?"))
        {
            return true;
        }
        else {
            return false;
        }
    }

    $("#course-registration-grid #course-list-search-box").keyup(function(event) {
        if (event.keyCode == 13) {
            seracvalue = $("#course-list-search-box").val();
            $('#course-registration-grid').html($('#pre_loader_course').html());

            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/batch'); ?>",
                data: "&ajaxPagin=true&class=<?php echo $request_class; ?>&q="+seracvalue, // serializes the form's elements.
                success: function(msg)
                {
                    $('#course-registration-grid').html(msg);
                }
            });

            return false; // avoid to execute the actual submit of the form.
        }
    });


    $('#course-registration-grid .page-numbers').click(function() {
        seracvalue = $("#course-list-search-box").val();
        page = $(this).attr('data-page');
//        $pageind = $page.indexOf('page=');
//        $page = $page.substring(($pageind + 5));
        field = '';
        order = '';
        //Traverse table for sort data
        $('#reservation-list tr').each(function() {

            $(this).find('th a').each(function() {
                if ($(this).hasClass('active'))
                {
                    field = $(this).attr('data-value');
                    order = $(this).attr('data-order');
                }

            });

        });

        $('#course-registration-grid').html($('#pre_loader_course').html());
        $.ajax({
            url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/batch'); ?>",
            type: "POST",
            data: "ajaxPagin=true&class=<?php echo $request_class; ?>&page=" + page + "&sort=" + field + "&order=" + order + "&" + $("#frmdCourseSearch").serialize() + "&q=" + seracvalue,
            cache: false,
            success: function(msg) {
                $('#course-registration-grid').html(msg);
            }
        });
        return false;
    });



    $('#course-registration-grid .sort-link').click(function() {
        seracvalue = $("#course-list-search-box").val();
        field = $(this).attr('data-value');
        order = $(this).attr('data-order');

        $('#course-registration-grid').html($('#pre_loader_course').html());
        $.ajax({
            url: "<?php echo Yii::app()->createUrl('mrCourseRegistration/batch'); ?>",
            type: "POST",
            data: "ajaxPagin=true&class=<?php echo $request_class; ?>&sort=" + field + "&order=" + order + "&" + $("#frmdCourseSearch").serialize() + "&q=" + seracvalue,
            cache: false,
            success: function(msg) {

                $('#course-registration-grid').html(msg);

            }

        });
        return false;
    });
</script>    

<form action="<?php echo Yii::app()->createUrl('//mrCourseRegistration/csvexport/?class='.$request_class);?>" method="POST">
<div class="summary" style="display: none;">
    <input type="text" name="course-list-search-box" id="course-list-search-box"  class="search_box" value="<?php echo $this->stripJunk($q); ?>" /><img src="<?php echo Yii::app()->request->baseUrl . '/themes/marine/img/icons/search-icon.png'; ?>" alt="icon" class="search_box_img_con" />
    <p style="floiat:right;">Displaying <?php echo $position; ?> of <?php echo $totaldata; ?> results.</p>
</div>
<table class="table table-striped table-bordered table-hover" id="reservation-list">
    <thead>
        <tr>
            <th><input type="checkbox" onClick="toggle(this)">  <a href="javascript:void(0);"  data-order="<?php echo (in_array('id', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='id' class="sort-link <?php echo (in_array('id', $sort) ? 'active' : ''); ?>" >ID</a> </th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_name', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='course_name' class="sort-link <?php echo (in_array('course_name', $sort) ? 'active' : ''); ?>">Course Name</a></th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_abbr', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='class_details' class="sort-link <?php echo (in_array('class_details', $sort) ? 'active' : ''); ?>">Class Details</a></th>
<!--            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('level', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='level' class="sort-link <?php echo (in_array('level', $sort) ? 'active' : ''); ?>">Course Level</a></th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_fees', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='course_fees' class="sort-link <?php echo (in_array('course_fees', $sort) ? 'active' : ''); ?>">Course Fees</a></th>
             <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('status', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='status' class="sort-link <?php echo (in_array('status', $sort) ? 'active' : ''); ?>">Status</a></th>-->
<!--            <th><a href="javascript:void(0);" onclick="javascript:sort(this.getAttribute('data-value'), this.getAttribute('data-order'));" data-order="<?php echo (in_array('end_date', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='end_date' class="sort-link <?php echo (in_array('end_date', $sort) ? 'active' : ''); ?>">End Date</a></th>-->
            <th> Student's Details(ID)</th>
            <th> CDC <br> INDOS</th>
             <th>  Status </th>
             <th>  Action </th>


        </tr>
    </thead>
    <tbody>
        <?php
        if (count($dataArray)) {
            //print_r($dataArray);
            foreach ($dataArray as $data) {
                if($this->stripJunk($data['cirtificate_status'])=="C") $Status_val="<font color='green'>Completed</font>"; else $Status_val="Incomplete";
                if($this->stripJunk($data['mobile'])!="") $mob_val="M: ".$this->stripJunk($data['mobile']); else $mob_val="";
                
                $cirtificaTION="<a title='Cirtificate Edit' href='".Yii::app()->createUrl('mrCourseRegistration/cirtification/'.$data['regid'].'')."'>Cirtificate</a>";
                $payment="<a title='Payment Edit' href='".Yii::app()->createUrl('mrCourseRegistration/payment/'.$data['regid'].'')."'>Payment</a>";
                
                echo '<tr>';
                echo '<td><input type="checkbox"  name="std[]" value="'.$data['regid'].'">' . $data['id'] . '</td>';
                echo '<td>' . $this->stripJunk($data['course_name']) . '</td>';
                echo '<td>' . $this->stripJunk($data['class_details']) . '</td>';
                echo '<td>' . $this->stripJunk($data['firstname'])." ".$this->stripJunk($data['lastname']). ' ('.$data['student_id'].') <br>'.$mob_val.'</td>';
                echo '<td>' . $this->stripJunk($data['CDCNO'])."<br>".$this->stripJunk($data['INDOSNO']). '</td>';
                echo '<td>' . $Status_val.'</td>'; 
                echo '<td>' . $cirtificaTION.'&nbsp;&nbsp;'.$payment.'</td>'; 

                echo '</tr>';
            }
        } else {
            ?>
            <tr>
                <td colspan="13">No result found</td>
            </tr>

            <?php
        }
        ?>
    </tbody>
</table>
<?php echo $pagination; ?>
    <input type="submit" name="export_csv" value="Export Registration CSV">    
    <input type="submit" name="export_cert_csv" value="Export Cirtification CSV">
</form>    
    
<script>
function toggle(source) {
  checkboxes = document.getElementsByName('std[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>