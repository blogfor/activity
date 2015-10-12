<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public $session_val=array();
        
        
//public function __construct() {
//   // $this->session_validation();
//}
//
public function session_validation() {
    print_r($_SESSION);
//    echo "rrr";
//    die();
}       
       
	
public function getDateFormat($val) {

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

public function getDateFormatDashboard($val) {
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

public function getDateTimeFormat($val) {
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

public function getDateFormatFromTimeStamp($val) {
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

public function getDateTimeFormatFromTimeStamp($val) {
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

public function getDateTimeFormatDayOfTheWeek($val) {
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


/*
     * Custom pagination 
     */
    
    public function customPagination($sqlQuery='',$page=1,$sort=array(),$limit=10)
    {
       
        
        $finalArray=array(); // this will store , final data array , pagination html 
        
        $QueryData = Yii::app()->db->createCommand("SELECT COUNT(*) AS CNT FROM (".$sqlQuery.") AS TEMP")->queryAll();
        
        $TotalresultCount=$QueryData[0]['CNT'];
        $total_pages=ceil($TotalresultCount/$limit);
        
        /*
         * For Data genertae ARRAy
         */
        $data=$this->table_data_function($sqlQuery,$page,$limit,$sort);
        
        $finalArray['data']=$data;
        
        /*
         * For Pagination Html
         */
        $Paginatehtml=$this->paginate_function($limit, $page, $TotalresultCount, $total_pages);
       
        $finalArray['pagination']=$Paginatehtml; // Prepare pagination html
        $finalArray['orderby']=$sort;  // prepare order by field value
        $finalArray['totalCount']=$TotalresultCount; // Prepare total count
        
        if($page==1)
        $showingData='1 - '.$limit;
        else
             $showingData=(($page-1) * $limit).' - '.((($page-1) * $limit)+$limit);
        
         $finalArray['position']=$showingData;
        return $finalArray;
        Yii::app()->end();
    }
    
    /*
     * prepare and return only data in raw array
     */
    public  function table_data_function($sqlQuery='',$page=1,$limit=10,$sort=array())
    {
        
        
        
        if(!empty($sort) && $sort[0]!='' && $sort[1]!='')
        { 
            $removeArray= explode('ORDER BY',strtoupper($sqlQuery));
            $sqlQuery='';
            for($i=0;$i<count($removeArray)-1;$i++)
            {
                $sqlQuery.=strtolower($removeArray[$i]);
            }
           
            $sqlQuery.="ORDER BY ".$sort[0]." ".$sort[1]; 
        }
        
        $start_position = (($page-1) * $limit);
        
         $sqlQuery.=" LIMIT ".$start_position.",".$limit;
       // echo $sqlQuery;
         $QueryData = Yii::app()->db->createCommand($sqlQuery)->queryAll();
         return $QueryData;
    }



    /*
     * Pagination HTML and return
     */
    public function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
        {
            $pagination = '';
            if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
                $pagination .= '<div class="pager">  Go to page: &nbsp; <ul class="yiiPager">';

                $right_links    = $current_page + 3;
                $previous       = $current_page - 3; //previous link
                $next           = $current_page + 1; //next link
                $first_link     = true; //boolean var to decide our first link

                if($current_page > 1){
                    $previous_link = ($previous==0)?1:$previous;
                    $pagination .= '<li class="first page"><a href="#" data-page="1" title="First" class="page-numbers">&laquo;</a></li>'; //first link
                    $pagination .= '<li class="page"><a href="#" data-page="'.$previous_link.'" title="Previous" class="page-numbers">&lt;</a></li>'; //previous link
                        for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                            if($i > 0){
                                $pagination .= '<li class="page"><a href="#" data-page="'.$i.'" title="Page'.$i.'" class="page-numbers">'.$i.'</a></li>';
                            }
                        }  
                    $first_link = false; //set first link to false
                }

                if($first_link){ //if current active page is first link
                    $pagination .= '<li class="first active page"><a href="#" data-page="'.$i.'" title="Page '.$i.'" class="page-numbers">'.$current_page.'</a></li>';
                }elseif($current_page == $total_pages){ //if it's the last active link
                    $pagination .= '<li class="last active page"><a href="#" data-page="'.$i.'" title="Page '.$i.'" class="page-numbers">'.$current_page.'</a></li>';
                }else{ //regular current link
                    $pagination .= '<li class="active page"><a href="#">'.$current_page.'</a></li>';
                }

                for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
                    if($i<=$total_pages){
                        $pagination .= '<li class="page"><a href="#" data-page="'.$i.'" title="Page '.$i.'" class="page-numbers">'.$i.'</a></li>';
                    }
                }
                if($current_page < $total_pages){
                        $next_link = ($i > $total_pages)? $total_pages : $i;
                        $pagination .= '<li class="page"><a href="#" data-page="'.$next_link.'" title="Next" class="page-numbers">&gt;</a></li>'; //next link
                        $pagination .= '<li class="last page"><a href="#" data-page="'.$total_pages.'" title="Last" class="page-numbers">&raquo;</a></li>'; //last link
                }

                $pagination .= '</ul></div>';
            }
            return $pagination; //return pagination links
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



function global_students_search($search_key){
    //Find in a Students table 
    $sqlQuery=" SELECT * FROM mr_students WHERE CDCNO='".$search_key."' OR INDOSNO='".$search_key."' OR passportno='".$search_key."' ";
    $QueryData = Yii::app()->db->createCommand($sqlQuery)->queryAll();
    
    return $QueryData;
}









################################
}