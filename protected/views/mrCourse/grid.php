<?php
$dataArray = $data['data'];
$pagination = $data['pagination'];
$sort = $data['orderby'];
$totaldata = $data['totalCount'];
$position = $data['position'];
$q = isset($data['q']) ? $data['q'] : '';
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

    $("#course-grid #course-list-search-box").keyup(function(event) {
        if (event.keyCode == 13) {
            seracvalue = $("#course-list-search-box").val();
            $('#course-grid').html($('#pre_loader_course').html());

            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createUrl('mrCourse/admin'); ?>",
                data: "&ajaxPagin=true&q=" + seracvalue, // serializes the form's elements.
                success: function(msg)
                {
                    $('#course-grid').html(msg);
                }
            });

            return false; // avoid to execute the actual submit of the form.
        }
    });


    $('#course-grid .page-numbers').click(function() {


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

        $('#course-grid').html($('#pre_loader_course').html());
        $.ajax({
            url: "<?php echo Yii::app()->createUrl('mrCourse/admin'); ?>",
            type: "POST",
            data: "ajaxPagin=true&page=" + page + "&sort=" + field + "&order=" + order + "&" + $("#frmdCourseSearch").serialize() + "&q=" + seracvalue,
            cache: false,
            success: function(msg) {

                $('#course-grid').html(msg);

            }

        });
        return false;
    });



    $('#course-grid .sort-link').click(function() {


        seracvalue = $("#course-list-search-box").val();
        field = $(this).attr('data-value');
        order = $(this).attr('data-order');

        $('#course-grid').html($('#pre_loader_course').html());
        $.ajax({
            url: "<?php echo Yii::app()->createUrl('mrCourse/admin'); ?>",
            type: "POST",
            data: "ajaxPagin=true&sort=" + field + "&order=" + order + "&" + $("#frmdCourseSearch").serialize() + "&q=" + seracvalue,
            cache: false,
            success: function(msg) {

                $('#course-grid').html(msg);

            }

        });
        return false;
    });
</script>    

<div class="summary">
    <input type="text" name="course-list-search-box" id="course-list-search-box"  class="search_box" value="<?php echo $this->stripJunk($q); ?>" /><img src="<?php echo Yii::app()->request->baseUrl . '/themes/marine/img/icons/search-icon.png'; ?>" alt="icon" class="search_box_img_con" />
    <p style="floiat:right;">Displaying <?php echo $position; ?> of <?php echo $totaldata; ?> results.</p>
</div>
<table class="table table-striped table-bordered table-hover" id="reservation-list">
    <thead>
        <tr>
            <th> <a href="javascript:void(0);"  data-order="<?php echo (in_array('id', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='id' class="sort-link <?php echo (in_array('id', $sort) ? 'active' : ''); ?>" >ID</a> </th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_name', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='course_name' class="sort-link <?php echo (in_array('course_name', $sort) ? 'active' : ''); ?>">Course Name</a></th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_abbr', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='course_abbr' class="sort-link <?php echo (in_array('course_abbr', $sort) ? 'active' : ''); ?>">Course Abbriviation</a></th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('level', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='level' class="sort-link <?php echo (in_array('level', $sort) ? 'active' : ''); ?>">Course Level</a></th>
            <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('course_fees', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='course_fees' class="sort-link <?php echo (in_array('course_fees', $sort) ? 'active' : ''); ?>">Course Fees</a></th>
             <th><a href="javascript:void(0);"  data-order="<?php echo (in_array('status', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='status' class="sort-link <?php echo (in_array('status', $sort) ? 'active' : ''); ?>">Status</a></th>
<!--            <th><a href="javascript:void(0);" onclick="javascript:sort(this.getAttribute('data-value'), this.getAttribute('data-order'));" data-order="<?php echo (in_array('end_date', $sort) ? in_array('asc', $sort) ? 'desc' : 'asc'  : 'asc'); ?>" data-value='end_date' class="sort-link <?php echo (in_array('end_date', $sort) ? 'active' : ''); ?>">End Date</a></th>-->
            <th width="5%"></th>



        </tr>
    </thead>
    <tbody>
        <?php
        if (count($dataArray)) {
            foreach ($dataArray as $data) {
                echo '<tr>';
                echo '<td>' . $data['id'] . '</td>';
                echo '<td>' . $this->stripJunk($data['course_name']) . '</td>';
                echo '<td>' . $this->stripJunk($data['course_abbr']) . '</td>';
                // echo '<td>' . $this->gridStatusName($data) . '</td>';
                echo '<td>' . $this->stripJunk($data['level']) . '</td>';
                echo '<td>' . $this->stripJunk($data['course_fees']) . '</td>';
                echo '<td>' . $this->stripJunk($data['status']) . '</td>';

                echo '<td>';
                echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/themes/marine/img/icons/view.png' . '" alt="View"/>', array('mrCourse/view/' . $data['id']), array('class' => ''));


                echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/themes/marine/img/icons/update.png' . '" alt="Update"/>', array('mrCourse/update/' . $data['id']), array('class' => ''));
                echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/themes/marine/img/icons/delete.png' . '" alt="View"/>', array('mrCourse/delete/' . $data['id'] . '?returnUrl=' . Yii::app()->request->url), array('class' => '', 'onclick' => 'javascript:return deleteA();'));
                echo '</td>';


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