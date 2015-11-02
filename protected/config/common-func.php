<?php

define("FROMEMAIL", "mcm@mymediacentermanager.com");
define("SEARCHWITHLIKE", true);
define("DASHBOARDPAGINATIONLIMIT", 10);
define("LISTPAGINATIONLIMIT", 10);
define("PAYMENTTURNOFFMSG", FALSE);
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

function getDateFormatDashboard($val) {
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
        $date = '<b><font color="FF0000">No</font></b>';
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

function getDateFormatFromTimeStamp($val) {
    if ($val != '') {
        $val = substr($val, 0, 10);
        $date = date("M j, Y", $val);
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

function getDateTimeFormatFromTimeStamp($val) {
    if ($val != '') {
        $date = date("M j, Y, g:i A", $val);
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
################################

function getDateTimeFormatDayOfTheWeek($val) {
    if ($val != '') {
        $date = date("l, M d, Y, g:i A", strtotime($val));
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

function addslashes_extended($arr_r) {
    if (is_array($arr_r)) {
        foreach ($arr_r as $key => $val) {
            is_array($val) ? $arr_r[$key] = addslashes_extended($val) : $arr_r[$key] = addslashes($val);
            //if(!is_array($val)) echo addslashes($val)."--".$key."<br/>";
        }
        unset($val);
    } else if (is_object($arr_r)) {
        $objectProperties = get_object_vars($arr_r);
        foreach ($objectProperties as $key => $value) {
            is_object($value) ? $arr_r->{$key} = addslashes_extended($value) : $arr_r->{$key} = addslashes($value);
            //if(!is_array($value)) echo addslashes($value)."==".$key."<br/>";
        }
    } else {
        $arr_r = addslashes($arr_r);
    }
    //print_r($arr_r);
    return $arr_r;
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

function getPDFDescription($desc) {
    $desc = stripJunk($desc);
    if (strlen($desc) > 103) {
        $desc = substr($desc, 0, 103) . '-<br>' . getPDFDescription(substr($desc, 103));
        return $desc;
    }
    else
        return $desc;
}

################################
//COMMON FUNCTION TO BLOCK CONTROLLERS / ACTION

function blockActions() {
    $RequestUrl = $_SERVER['REQUEST_URI'];
    $RequestUrls = explode("/", $RequestUrl);


    $sql = "SELECT * FROM peg_package_real_map";
    $UserController = Yii::app()->db->createCommand($sql)->queryAll();
    $UserContArray = array();
    $UserContControlerArray = array();
    $i = 0;
    $match = false;
    foreach ($UserController as $uc) {
        $UserContArray[$i] = $uc['menu_title'];
        $UserContControlerArray[$i++] = $uc['controller_name'];

        $parentController = explode(".", $uc['controller_name']);
        if ($uc['controller_name'] != '' && is_array($parentController)) {


            if (in_array($parentController[0], $RequestUrls)) {
                $match = true;
            }
        }
    }

    if ($match == false) {
        $redirectURL = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . "/app/index.php/site/index";
        return $redirectURL;
    }
    else
        return '';
}

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

function getDayDateRange($startDate, $endDate, $daydifference, $EndRecurence, $isWeekday) {
    $format = "Y-m-d";
    $weekdayval = '';
    //Create output variable
    $datesArray = array();
    //Calculate number of days in the range
    $total_days = round(abs(strtotime($endDate) - strtotime($startDate)) / 86400, 0) + 1;


    if ($total_days < 0) {
        return false;
    }
    //Populate array of weekdays and counts

    if ((int) $EndRecurence > 0)
        $total_days = $EndRecurence;
    //return $total_days;
    if ($endDate != '') {
        for ($day = 0; $day < $total_days;) {
            if ((int) $isWeekday == 2) { // Remove from the list SATDAY & SUNDAY
                $weekdayval = date("l", strtotime("{$startDate} + {$day} days"));
                if ($weekdayval != 'Sunday' && $weekdayval != 'Saturday') {
                    $datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));
                }
            }
            else
                $datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));



            if ($daydifference > 1)
                $day = $day + $daydifference;
            else
                $day = $day + 1;
        }
    }
    else {
        $day = 0;
        for ($i = 0; $i < $total_days; $i++) {
            if ((int) $isWeekday == 2) { // Remove from the list SATDAY & SUNDAY
                $weekdayval = date("l", strtotime("{$startDate} + {$day} days"));
                if ($weekdayval != 'Sunday' && $weekdayval != 'Saturday') {
                    $datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));
                }
            }
            else
                $datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));



            if ($daydifference > 1)
                $day = $day + $daydifference;
            else
                $day = $day + 1;
        }
    }
    //Return results array
    return $datesArray;
}

function getDayDateRangeweekly($startDate, $endDate, $daydifference, $EndRecurence, $weekDays, $weeklyEveryrecurrance) {  
    
    $format="Y-m-d";
	//Create output variable
	if (empty($endDate)) {
        $endDate = date('Y-m-d', strtotime('+5 year', strtotime($startDate)));
    }
    //echo $startDate.'---'.$endDate.'--'.$daydifference.'--'.$EndRecurence.'--'.$weekDays.'--'.$weeklyEveryrecurrance;
    
	//Create output variable
	$weekArray= array("MON", "TUE",  "WED", "THU", "FRI", "SAT","SUN");
	$startDateDay=strtoupper(date('D', strtotime($startDate)));
	$start_date_array_index=array_search($startDateDay, $weekArray);
	$start_date_before_day=array_slice($weekArray, 0, $start_date_array_index); 
	
	if(empty($weeklyEveryrecurrance) || $weeklyEveryrecurrance==0) $weeklyEveryrecurrance="1"; 
	
    $datesArray = array();
	$allweekDays=array_filter(explode("~",$weekDays));
	
    //Calculate number of days in the range
    $total_days = round(abs(strtotime($endDate) - strtotime($startDate)) / 86400, 0) + 1;
    if($total_days<0) { return false; }
    //Populate array of weekdays and counts	
	//if((int)$EndRecurence>0) $total_days=$EndRecurence;
	
	$repeat=1;
	$end=1;
	
	$weeklyDifference=$weeklyEveryrecurrance;
	$weeklyEveryrecurrance=1;
	
    for($day=0; $day<$total_days; )
    { 
	$findDay='';
	$findDays='';
	 $findDay= substr(strtoupper(date('l',  strtotime( date($format, strtotime("{$startDate} + {$day} days")) ) ) ),0,3);
	 $findDays= array_search($findDay,$allweekDays);
	  
	  if($findDays!==false){	  
	  	if( $weeklyEveryrecurrance == $repeat) {		    
		$datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));	
		$repeat=1;		
		}
		else{		
		$repeat++;		
		$end++; 
		}		
	  }
	$findDays='';	
	if($daydifference>1) $day=$day+$daydifference;
	else
	$day=$day+1;
    }
	
		
	if($weeklyDifference>=1){	
		$p=1;
		for($w=0; $w<=count($allweekDays)-1; $w++) 
		{   		
			for($d=0; $d<=count($datesArray); $d=$d+1 )
			{ 
				if($allweekDays[$w]==strtoupper(date('D', strtotime($datesArray[$d]))) ){
				$dayWiseArray[]=$datesArray[$d];
				$dayArray[]=strtoupper(date('D', strtotime($datesArray[$d])));
				}	
			}	
		}
		
		
		for($w=0; $w<=count($allweekDays)-1; $w++) 
		{   		
			for($d=0; $d<=count($dayArray); $d=$d+1  )
			{ 		
				if($allweekDays[$w]==$dayArray[$d] )
				{
				 $daysTempLast[]=$dayWiseArray[$d];
				
				}
			}
				
			
			if(in_array($allweekDays[$w], $start_date_before_day) ){
			 $startIndex=$weeklyDifference-1;
			}
			else 
			 $startIndex=0;
	         
			for($d=$startIndex; $d<=count($daysTempLast)-1; $d=$d+$weeklyDifference  )
			{ 	 $daysLast[]=$daysTempLast[$d];
		    }
				
			
			unset($daysTempLast);	
		}
		
	}
	
	
	$daysLast=array_filter($daysLast);
	sort($daysLast);
   
    //Return results array
	if($EndRecurence>0)
    {
        if(count(array_slice($daysLast, 0, $EndRecurence))<$EndRecurence)
        $outputdatesArray = array_slice($daysLast, 0, $EndRecurence+1); 
        else
        $outputdatesArray = array_slice($daysLast, 0, $EndRecurence);     
        
    }
	else
	$outputdatesArray=$daysLast;
	
	//return $start_date_before_day;
    return $outputdatesArray;
    
            }

function getDayDateRangemonthly($startDate, $endDate, $daydifference, $EndRecurence, $monthly, $everDayofMonth) {
    $format = "Y-m-d";
    $monthlyData1 = '';
    $monthlyData2 = '';
    $monthVals = '';
    $dateArr = array();
    $monthValsArray = array();


//if($endDate=='1970-01-01') $endDate=date('Y-m-d', strtotime('+two year', date('Y-m-d',strtotime($startDate)) ));



    $monthlyData = explode("~", $monthly);
    if (empty($monthlyData[2]) || $monthlyData[2] < 0)
        $monthGapVal = 1;
    else
        $monthGapVal = $monthlyData[2];

    if ($everDayofMonth == 0) {
        $monthlyData1 = $monthlyData[1];
        $monthlyData2 = $monthlyData[0];
    }

    $dateArr = getDateForSpecificDayBetweenDates($startDate, $endDate, $monthlyData1, $monthlyData2, $everDayofMonth);

    for ($i = 0; $i <= count($dateArr) - 1;) {
        if (strtotime($startDate) <= strtotime($dateArr[$i])) {
            $monthVals[] = $dateArr[$i];
        }

        $i = $i + $monthGapVal;
    }


    if ($EndRecurence > 0)
        $monthValsArray = array_slice($monthVals, 0, $EndRecurence);
    else
        $monthValsArray = $monthVals;


    if (($monthValsArray) == '')
        $monthValsArray = array();

    return $monthValsArray;
// new DateTime("first wednesday of $y-$m"),
}

function getDateForSpecificDayBetweenDates($startDates, $endDates, $weekdayNumber, $firstday, $everDayofMonth) {
    $startDate = strtotime($startDates);
    $endDate = strtotime($endDates);
    $firstweekday = "";
    $dayVal = 0;

    if ($everDayofMonth == 0) {
        $curretDateDay = strtotime($firstday . " " . $weekdayNumber . " of " . date("Y-m", $startDate));
        if ($startDate > $curretDateDay)
            $dayVal = 10;
        else
            $dayVal = 1;
    }
    else {
        $dayVal = 1;
    }

    $dateArr = array();
    $dateArrmonth = array();
    do {
        if (date("w", $startDate) != 0) {
            $startDate += ( $dayVal * 24 * 3600); // add 1 day
        }
    } while (date("w", $startDate) != 0);

    while ($startDate <= $endDate) {
        $dateArr[] = date('Y-m', $startDate);
        $startDate += (7 * 24 * 3600); // add 7 days
    }

    $monthsArr = array_values(array_unique($dateArr));
    //echo $firstday." ".$weekdayNumber." of ".$monthsArr[0];

    if ($everDayofMonth > 0) {
        for ($i = 0; $i <= count($monthsArr) - 1; $i++) {
            $firstweekday = strtotime($monthsArr[$i] . "-" . date("d", strtotime($startDates)));
            $dateArrmonth[] = date('Y-m-d', $firstweekday);
        }
    } else {
        for ($i = 0; $i <= count($monthsArr) - 1; $i++) {
            $firstweekday = strtotime($firstday . " " . $weekdayNumber . " of " . $monthsArr[$i]);
            $dateArrmonth[] = date('Y-m-d', $firstweekday);
        }
    }

    return($dateArrmonth);
}

function ageFromDob($dob) {
   
   if($dob!='0000-00-00' && $dob!=''){ 
    // Build example data
$timeStart = strtotime($dob);
$timeEnd = strtotime(date('Y-m-d'));
// Adding current month + all months in each passed year
$numMonths = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
// Add/subtract month difference
$numMonths += date("m",$timeEnd)-date("m",$timeStart);
    
//    $c = date('Y');
//    $y = date('Y', strtotime($dob));
    return (int)($numMonths/12);
   }
   else
   {
       
       return 0;
       
   }
}
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


// parse_payflow_string: Parses a response string from Payflow and returns an
// associative array of response parameters.

function parse_payflow_string($str) {    
$workstr = $str;    
$out = array();         

while(strlen($workstr) > 0) {        
$loc = strpos($workstr, '=');        
if($loc === FALSE) {            
// Truncate the rest of the string, it's not valid            
$workstr = "";            
continue;        
}                 

$substr = substr($workstr, 0, $loc);        
$workstr = substr($workstr, $loc + 1);
// "+1" because we need to get rid of the "="                 

if(preg_match('/^(\w+)\[(\d+)]$/', $substr, $matches)) {            
// This one has a length tag with it.  Read the number of characters            
// specified by $matches[2].            
$count = intval($matches[2]);                         
$out[$matches[1]] = substr($workstr, 0, $count);            
$workstr = substr($workstr, $count + 1);
// "+1" because we need to get rid of the "&"        
} else {            
// Read up to the next "&"            
$count = strpos($workstr, '&');            

if($count === FALSE) {
// No more "&"'s, read up to the end of the string                
$out[$substr] = $workstr;                
$workstr = "";            
} else {
$out[$substr] = substr($workstr, 0, $count);                
$workstr = substr($workstr, $count + 1);
// "+1" because we need to get rid of the "&"            
}        
}    
}         
return $out;
}

//// Helper functions
if (!function_exists('pre')) {
function pre($arr, $heading = NULL) {  
if (!empty($heading)) {    
//echo "<p><b>$heading</b></p>";  
}
//echo "<pre><code>\n" . print_r($arr,true) . "\n</pre></code>";
//echo "<pre><code>\n" .$arr['RESPMSG'] . "\n</pre></code>";
}}

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