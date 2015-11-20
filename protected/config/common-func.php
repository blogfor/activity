<?php
session_start();
define("SAND_BOX", "Yes");
date_default_timezone_set('America/Los_Angeles');

/*
 * START YEAR & END YEAR FOR CALENDAR
 */
define("CALENDAR_START_YEAR", 2005);
define("CALENDAR_END_YEAR", 2020);
################################


// Date view format in date picker
define("DATEDISPLAYFORMAT", "m-d-Y");
define("DATETIMEDISPLAYFORMAT", "m-d-Y h:i a");
define("DATESEP", "-");
define("TIMEFOTMAT", "h:i a");
// Date view format in date picker

function getDateFormat($val) {
    if ($val != '') {
        $val = substr($val, 0, 10);
        $date = date("M j, Y", strtotime($val));
        if (strstr($date, "1969")) {
            $date = '---';
        } else if (strstr($date, "1970")) {
            $date = '---';
        } else if (strstr($date, "-0001")) {
            $date = '---';
        }
    } else {
        $date = '<b><font color="FF0000">Not Found</font></b>';
    }
    return $date;
}



################################

function getDateTimeFormat($val) {
    if ($val != '') {
        $date = date("M j, Y, g:i A", strtotime($val));
        if (strstr($date, "1969")) {
            $date = '---';
        } else if (strstr($date, "1970")) {
            $date = '---';
        } else if (strstr($date, "-0001")) {
            $date = '---';
        }
    }
    else
        $date = '<b><font color="FF0000">Not Found</font></b>';
    return $date;
}

################################




function stripJunk($str) {
    $str = stripslashes($str);
    $str = str_replace("\\", "", $str);
    return $str;
}

function stripJunkwithsinglequote($str) {
    $str = stripJunk($str);
    $str = str_replace("'", "", $str);
    $str = str_replace('"', "", $str);
    return $str;
}

################################


/*
 * Get LAST N DAYS 
 */

function getLastNDays($days, $format = 'd/m') {
    $m = date("m");
    $de = date("d");
    $y = date("Y");
    $dateArray = array();
    for ($i = 0; $i <= $days - 1; $i++) {
        $dateArray[] = date($format, mktime(0, 0, 0, $m, ($de - $i), $y));
    }
    return array_reverse($dateArray);
}

/**
 * @create dropdown list of hours
 * @param string $id The name and id of the select object
 * @param int $selected
 * @return string
 */
function createHours($id = 'hours_select', $selected = null) {
    /*     * * range of hours ** */
    $r = range(1, 12);
    /*     * * current hour ** */
    $selected = is_null($selected) ? date('h') : $selected;
    $select = "<select name=\"$id\" id=\"$id\">\n";
    foreach ($r as $hour) {
        $select .= "<option value=\"$hour\"";
        $select .= ($hour == $selected) ? ' selected="selected"' : '';
        $select .= ">$hour</option>\n";
    }
    $select .= '</select>';
    return $select;
}

/**
 * @create dropdown list of minutes
 * @param string $id The name and id of the select object
 * @param int $selected
 * @return string
 */
function createMinutes($id = 'minute_select', $selected = null) {
    /*     * * array of mins ** */
    $minutes = array(0, 15, 30, 45);
    $selected = in_array($selected, $minutes) ? $selected : 0;
    $select = "<select name=\"$id\" id=\"$id\">\n";
    foreach ($minutes as $min) {
        $select .= "<option value=\"$min\"";
        $select .= ($min == $selected) ? ' selected="selected"' : '';
        $select .= ">" . str_pad($min, 2, '0') . "</option>\n";
    }
    $select .= '</select>';
    return $select;
}

/**
 * @create a dropdown list of AM or PM
 * @param string $id The name and id of the select object
 * @param string $selected
 * @return string
 */
function createAmPm($id = 'select_ampm', $selected = null) {
    $r = array('AM', 'PM');
    /*     * * set the select minute ** */
    $selected = is_null($selected) ? date('A') : strtoupper($selected);
    $select = "<select name=\"$id\" id=\"$id\">\n";
    foreach ($r as $ampm) {
        $select .= "<option value=\"$ampm\"";
        $select .= ($ampm == $selected) ? ' selected="selected"' : '';
        $select .= ">$ampm</option>\n";
    }
    $select .= '</select>';
    return $select;
}

##---------------------------------------------------------------------##




// DatePicker //
function getDatePicker($id,$datepicker=true)
{
	echo "<script type=\"text/javascript\">
        $('#".$id."').datetimepicker({
                format: '".DATEDISPLAYFORMAT."',
                yearStart:".CALENDAR_START_YEAR.",
                yearEnd:".CALENDAR_END_YEAR.",                
                timepicker: false,
                closeOnDateSelect: 0,
                datepicker:".$datepicker.",
            });			
			</script>";
}

function getDateTimePicker($id)
{
	//echo DATETIMEDISPLAYFORMAT.date(DATETIMEDISPLAYFORMAT);
	echo "<script type=\"text/javascript\">
        $('#".$id."').datetimepicker({
                format: '".DATETIMEDISPLAYFORMAT."',
                yearStart:".CALENDAR_START_YEAR.",
                yearEnd:".CALENDAR_END_YEAR.",
                formatTime: 'h:i a',
                timepicker: true,
                closeOnDateSelect: 0,
            });			
			</script>";
}

function getDatePickerWithModel($t,$m,$id,$valclass='',$minDate='',$datepicker=true)
{	
	if($minDate!=''){
	 $t->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
			'model' => $m,
			'attribute' => $id,
			'options' => array('yearStart'=>CALENDAR_START_YEAR,'yearEnd'=>CALENDAR_END_YEAR,'timepicker'=>false,'format'=>DATEDISPLAYFORMAT,'closeOnDateSelect'=>0,"minDate"=>$minDate,"datepicker"=>$datepicker),
			'htmlOptions' => array('size' => 20, 'maxlength' => 30, 'class' => $valclass),
		));
	}
	else
	{
		$t->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
			'model' => $m,
			'attribute' => $id,
			'options' => array('yearStart'=>CALENDAR_START_YEAR,'yearEnd'=>CALENDAR_END_YEAR,'timepicker'=>false,'format'=>DATEDISPLAYFORMAT,'closeOnDateSelect'=>0,"datepicker"=>$datepicker),
			'htmlOptions' => array('size' => 20, 'maxlength' => 30, 'class' => $valclass),
		));
	}
}
//TIMEFOTMAT ,'formatTime'=>TIMEFOTMAT
function getDateTimePickerWithModel($t,$m,$id,$valclass='',$minDate='',$datepicker=true)
{
	if($minDate!='') {
	$t->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
				'model' => $m,
				'attribute' => $id,
				'options' => array('format'=>DATETIMEDISPLAYFORMAT,'formatTime'=>TIMEFOTMAT,'yearStart'=>CALENDAR_START_YEAR,'yearEnd'=>CALENDAR_END_YEAR,'timepicker'=>true,'closeOnDateSelect'=>0,"minDate"=>$minDate,"datepicker"=>$datepicker),
				'htmlOptions' => array('size' => 20, 'maxlength' => 30, 'class' => $valclass),
	));
	}
	else
	{
		$t->widget('ext.YiiDateTimePicker.jqueryDateTime', array(
				'model' => $m,
				'attribute' => $id,
				'options' => array('format'=>DATETIMEDISPLAYFORMAT,'formatTime'=>TIMEFOTMAT,'yearStart'=>CALENDAR_START_YEAR,'yearEnd'=>CALENDAR_END_YEAR,'timepicker'=>true,'closeOnDateSelect'=>0,"datepicker"=>$datepicker),
				'htmlOptions' => array('size' => 20, 'maxlength' => 30, 'class' => $valclass),
	));
	}
}

function getPostDateInMysqlFormat($d,$widthTime=1)
{
    
	$date = str_replace(DATESEP,'/',$d);
	if($widthTime==1)
		return $mysql_date = date('Y-m-d H:i:s', strtotime($date));
	else
		return $mysql_date = date('Y-m-d', strtotime($date));
}

// DatePicker //




function custom_encode($str)
{
	return urlencode($str);
}

function custom_decode($str)
{
	//echo  urldecode($str);
	return urldecode($str);
}

?>