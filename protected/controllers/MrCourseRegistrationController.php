<?php

class MrCourseRegistrationController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/adminmain';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
//		return array(
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
//		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
//		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('*'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
//		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
            $this->render('view',array(
                    'model'=>$this->loadModel($id),
            ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            $model=new MrCourseRegistration;
            //print_r($_POST);
            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['CDCno']))
            {   

                $queryp = " SELECT * from  mr_students where CDCNO='".$_POST['CDCno']."'";
                $resultp = Yii::app()->db->createCommand($queryp)->queryAll();
              

                Yii::app()->session['student_reg']="";
                if(count($resultp)==0){
                    Yii::app()->session['student_reg'] = "Y";                     
                    $this->redirect(array('mrStudents/create/','cdcno'=>$_POST['CDCno']));  
                }
                else{   
                    Yii::app()->session['student_reg']=$_POST['CDCno'];
                    $this->redirect(array('mrStudents/update/'.$resultp[0]['id']));
                   // $this->redirect(array('mrCourseRegistration/register'));
                }
                //              $model->attributes=$_POST['MrCourseRegistration'];
                //		if($model->save())
                //		$this->redirect(array('view','id'=>$model->id));
                
            }

            $this->render('create',array(
                    'model'=>$model,
            ));
	}
        
        public function actionSave_register()
        {
				
            $student_id=$_POST['student_id'];
            $course_id=$_POST['course_id'];
            $class_id=$_POST['classes'];
            if($_POST['attach_photo']=="on") $attach_photo="Y"; else $attach_photo="N" ;
            if($_POST['attach_passport']=="on") $attach_passport="Y"; else $attach_passport="N" ;
            if($_POST['attach_cdc']=="on") $attach_cdc="Y"; else $attach_cdc="N" ;
            if($_POST['attach_coc']=="on") $attach_coc="Y"; else $attach_coc="N" ;
            if($_POST['attach_indos']=="on") $attach_indos="Y"; else $attach_indos="N" ;


            $cash_amount=$_POST['cash_amount'];
            $other_pay_type=$_POST['other_pay_type'];
            $chq_amount=$_POST['chq_amount'];
            $chq_no=$_POST['chq_no'];
            $chq_details=$_POST['chq_details'];
            $recept_no=$_POST['recept_no'];
            
            $last_sign_off=date("Y-m-d",strtotime($_POST['last_sign_off']));
            $last_immigration=date("Y-m-d",strtotime($_POST['last_immigration']));        

            $image_name=Yii::app()->session['student_pic'].".png";
            
            $query_student_details = " SELECT * from mr_students where id='".$student_id."'";
            $resultp = Yii::app()->db->createCommand($query_student_details)->queryAll();
            
            $json_student_data=json_encode($resultp[0]);
            

            $sql=" INSERT INTO  `mr_course_registration` (
            `course_id` ,
            `class_id` ,
            `student_id` ,
            `attach_upload_photo` ,
            `attach_photo` ,
            `attach_passport` ,
            `attach_cdc` ,
            `attach_coc` ,
            `attach_indos` ,           
            `last_sign_off`,
            `last_immigration`,
            `details_during_reg`
            )
            VALUES (
            '$course_id',  '$class_id',  '$student_id', '$image_name' , '$attach_photo' , '$attach_passport' , '$attach_cdc' , '$attach_coc' , '$attach_indos' 
            ,'$last_sign_off',  '$last_immigration' , '$json_student_data'   
            )";          

            Yii::app()->db->createCommand($sql)->execute();
            $registration_id = Yii::app()->db->getLastInsertID();
            
            for($i=0; $i<=count($_POST['amount'])-1; $i++)
            {
               if( isset($_POST['amount'][$i]) && !empty($_POST['amount'][$i]) && (int)$_POST['amount'][$i]>0)
               {
                     $sql="insert into mr_course_registration_payment set "
                             . " registration_id='".$registration_id."',"
                             . " payment_type='".$_POST['payment_type'][$i]."',"
                             . " amount='".$_POST['amount'][$i]."',"
                             . " chq_no='".$_POST['chq_no'][$i]."' ,"
                             . " details='".$_POST['details'][$i]."' ,"
                             . " receipt_no='".$_POST['receipt_no'][$i]."' ,"
                             . " entry_date='".date('Y-m-d',strtotime($_POST['entry_date'][$i]))."' ";

                     $command =Yii::app()->db->createCommand($sql);
                     $command->execute();
               }    

            }
            
            
            

            // $this->render('application_form',array('model'=>$resultp));		
            Yii::app()->session['student_pic']="";
            Yii::app()->session['student_reg']="";                
            $this->redirect(array('/mrCourseRegistration/printform/'.$registration_id));	
            
        }
        
        
    public function actionPrintform(){
        
        $registration_id=$_GET['id'];
        $resultp=array();	
        
        $queryp = " SELECT * from mr_course_registration r "
                . " LEFT JOIN mr_students s ON r.student_id=s.id"
                . " LEFT JOIN mr_course co ON co.id=r.course_id"
                . " LEFT JOIN mr_class cl ON cl.id=r.class_id"
                . " LEFT JOIN mr_profession_type pt ON pt.id=s.routeofentry"
                . " where r.id='".$registration_id."'";
        $resultp = Yii::app()->db->createCommand($queryp)->queryAll();
        
        $querypay= " SELECT * from mr_course_registration_payment r "                  
                    . " where r.registration_id='$registration_id' order by receipt_no";            
        $resultpay = Yii::app()->db->createCommand($querypay)->queryAll();
            
        
        
        $this->render('print_application',array('model'=>$resultp,'payments'=>$resultpay));        
    }    
        
        
        
    public function actionRegister()
    {

        $queryp =" SELECT s.*,pt.profession_type from  mr_students s "
        ." LEFT JOIN mr_profession_type pt ON pt.id=s.routeofentry"
        ." where s.CDCNO='".Yii::app()->session['student_reg']."'";

        $resultp = Yii::app()->db->createCommand($queryp)->queryAll();	           
        $this->render('register',array('model'=>$resultp));
    }
        
        

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            $model=$this->loadModel($id);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['MrCourseRegistration']))
            {
                    $model->attributes=$_POST['MrCourseRegistration'];
                    if($model->save())
                            $this->redirect(array('view','id'=>$model->id));
            }

            $this->render('update',array(
                    'model'=>$model,
            ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $dataProvider=new CActiveDataProvider('MrCourseRegistration');
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
            ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
//            $model=new MrCourseRegistration('search');
//            $model->unsetAttributes();  // clear any default values
//            if(isset($_GET['MrCourseRegistration']))
//                    $model->attributes=$_GET['MrCourseRegistration'];
//
//            $this->render('admin',array(
//                    'model'=>$model,
//            ));
//            
            
            $model=new MrCourseRegistration('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MrCourseRegistration']))
			$model->attributes=$_GET['MrCourseRegistration'];
                
               // print_r($_POST);
               // echo $_POST['classes'];
                
            if (isset($_REQUEST['ajaxPagin'])) {   
               $subSql="";             
                if (isset($_POST['course_id']) && $_POST['course_id']!='') {                     
                     $subSql .=" AND mo.id='".$_POST['course_id']."' ";
                }
                if (isset($_POST['classes'])  && $_POST['classes']!='') {
                    $subSql .=" AND mc.id ='" . $_POST['classes'] . "'";
                }
//                if (isset($_POST['MrCourse']['level']) && $_POST['MrCourse']['level']!='') {
//                    $subSql .=" AND level regexp('" . $_POST['MrCourse']['level'] . "')";
//                }
//                if (isset($_POST['MrCourse']['id']) && $_POST['MrCourse']['id']!='') {
//                    $subSql .=" AND id regexp('" . $_POST['MrCourse']['id'] . "')";
//                }
//
//                if (isset($_POST['q']) && $_POST['q'] != '') {
//               $subSql = " AND course_name regexp('" . $_POST['q'] . "') OR class_details regexp('" . $_POST['q'] . "')";
//            }


            $sql ="select mr.id as regid,ms.mobile,mr.student_id,mr.cirtificate_status, ms.firstname,ms.lastname,ms.CDCNO,ms.INDOSNO, 
                    mc.id,mc.class_details,mo.course_name from mr_course_registration mr
                    LEFT JOIN mr_class mc ON mc.id=mr.class_id
                    LEFT JOIN mr_course mo ON mo.id=mr.course_id
                    LEFT JOIN mr_students ms ON ms.id=mr.student_id WHERE 1=1 ".$subSql." order by mc.id DESC";
            $data = $this->customPagination($sql, (isset($_REQUEST['page']) ? $_REQUEST['page'] : 1), array((isset($_REQUEST['sort']) ? $_REQUEST['sort'] : ''), (isset($_REQUEST['order']) ? $_REQUEST['order'] : '')));

            $this->renderPartial('grid', array('data' => $data,));
            Yii::app()->end();
            }

                
                
        $this->render('admin',array(
                'model'=>$model,
        ));
            
            
            
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MrCourseRegistration the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
            $model=MrCourseRegistration::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MrCourseRegistration $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{   if(isset($_POST['ajax']) && $_POST['ajax']==='mr-course-registration-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
	}
        
        
	public function actionClasses()
	{		 
            $resultp = MrClass::model()->findAll('status="Y" AND course_id='.$_POST['courseid']);
            $html='<select name="classes" id="classes">';
		
		
	   $list = CHtml::listData($resultp, 'id', 'start_date');
	   $list1 = CHtml::listData($resultp, 'id', 'end_date');
           $list2 = CHtml::listData($resultp, 'id', 'class_details');
	   
	   foreach($list as $key=>$lst)
	   {		  
		   $html .='<option value="'.$key.'">'.$list2[$key]." From:".date("d-m-Y",strtotime($lst))." To ".date("d-m-Y",strtotime($list1[$key])).'</option>';
	   }
	   $html .='</select>';
	   
	   echo $html;
	  Yii::app()->end();
		
	}
        
        
        /**
	 * Manages all models.
	 */
	public function actionCirtification()
	{
            $registration_id=$_GET['id'];
            $resultp=array();	
            $queryp = " SELECT * from mr_course_registration r "
                    . " LEFT JOIN mr_students s ON r.student_id=s.id"
                    . " LEFT JOIN mr_course co ON co.id=r.course_id"
                    . " LEFT JOIN mr_class cl ON cl.id=r.class_id"
                    . " LEFT JOIN mr_profession_type pt ON pt.id=s.routeofentry"
                    . " where r.id='$registration_id'";
            $resultp = Yii::app()->db->createCommand($queryp)->queryAll();
            
            $querypay= " SELECT * from mr_course_registration_payment r "                  
                    . " where r.registration_id='$registration_id' order by receipt_no";            
            $resultpay = Yii::app()->db->createCommand($querypay)->queryAll();
            
            $query_registration = " SELECT * from mr_profession_type ";
            $result_proffesion = Yii::app()->db->createCommand($query_registration)->queryAll();
            
            $query_signature="SELECT * from mr_signature ";
            $result_signature = Yii::app()->db->createCommand($query_signature)->queryAll();
            
            $this->render('cirtification',array('model'=>$resultp, 'payments'=>$resultpay,'prof'=>$result_proffesion,'signature'=>$result_signature));   
	}
        
        public function actionSave_cirtificate()
	{
           // print_r($_POST);  
            $sql="update mr_course_registration set "
                    . " cirtificate_no='".$_POST['cirtificate_no']."',"
                    . " cirtificate_grade='".$_POST['cirtificate_grade']."',"
                    . " cert_no='".$_POST['cert_no']."',"
                    . " cirtificate_status='C' "
                    . " WHERE id='".$_POST['registration_id']."'";
            $command =Yii::app()->db->createCommand($sql);
            $command->execute(); 
            $this->redirect(array('mrCourseRegistration/cirtification/'.$_POST['registration_id']));           
            //$this->redirect(array('cirtification','id'=>$_POST['registration_id']));                       
            
	}   
        
        
        
        /**
	 * Manages all models.
	 */
	public function actionPayment()
	{
            $registration_id=$_GET['id'];
            $resultp=array();	

            $queryp = " SELECT * from mr_course_registration r "
                    . " LEFT JOIN mr_students s ON r.student_id=s.id"
                    . " LEFT JOIN mr_course co ON co.id=r.course_id"
                    . " LEFT JOIN mr_class cl ON cl.id=r.class_id"
                    . " LEFT JOIN mr_profession_type pt ON pt.id=s.routeofentry"
                    . " where r.id='$registration_id'";
            $resultp = Yii::app()->db->createCommand($queryp)->queryAll();
            
            $querypay= " SELECT * from mr_course_registration_payment r "                  
                    . " where r.registration_id='$registration_id' order by receipt_no";            
            $resultpay = Yii::app()->db->createCommand($querypay)->queryAll();
            
            $this->render('payment',array('model'=>$resultp,'payments'=>$resultpay));             
            
	}
        
        public function actionSave_payment()
	{// echo "<pre>";
          
           for($i=0; $i<=count($_POST['amount'])-1; $i++)
           {
              if( isset($_POST['amount'][$i]) && !empty($_POST['amount'][$i]) && (int)$_POST['amount'][$i]>0)
              {
                    $sql="insert into mr_course_registration_payment set "
                            . " registration_id='".$_POST['registration_id']."',"
                            . " payment_type='".$_POST['payment_type'][$i]."',"
                            . " amount='".$_POST['amount'][$i]."',"
                            . " chq_no='".$_POST['chq_no'][$i]."' ,"
                            . " details='".$_POST['details'][$i]."' ,"
                            . " receipt_no='".$_POST['receipt_no'][$i]."' ,"
                            . " entry_date='".date('Y-m-d',strtotime($_POST['entry_date'][$i]))."' ";

                    $command =Yii::app()->db->createCommand($sql);
                    $command->execute();
              }    
               
           }
           $this->redirect(array('mrCourseRegistration/payment/'.$_POST['registration_id']));
           exit;         
           
                    
            
	}   
        
        
        
        
        public function actionBatch()
	{   
            $model=new MrCourseRegistration('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MrCourseRegistration']))
			$model->attributes=$_GET['MrCourseRegistration'];
                
                
                $request_class=$_REQUEST['class'];
               // echo $_POST['classes'];
               
                
            if (isset($_REQUEST['ajaxPagin'])) {   
               $subSql="";             
//                if (isset($_POST['course_id']) && $_POST['course_id']!='') {                     
//                     $subSql .=" AND mo.id='".$_POST['course_id']."' ";
//                }
//                if (isset($_POST['classes'])  && $_POST['classes']!='') {
//                    $subSql .=" AND mc.id ='" . $_POST['classes'] . "'";
//                }
            $subSql=" AND mr.class_id='".$request_class."'";   

            $sql ="select mr.id as regid,ms.mobile,mr.student_id,mr.cirtificate_status, ms.firstname,ms.lastname,ms.CDCNO,ms.INDOSNO, 
                    mc.id,mc.class_details,mo.course_name from mr_course_registration mr
                    LEFT JOIN mr_class mc ON mc.id=mr.class_id
                    LEFT JOIN mr_course mo ON mo.id=mr.course_id
                    LEFT JOIN mr_students ms ON ms.id=mr.student_id WHERE 1=1 ".$subSql." order by mc.id DESC";
            $data = $this->customPagination($sql, (isset($_REQUEST['page']) ? $_REQUEST['page'] : 1), array((isset($_REQUEST['sort']) ? $_REQUEST['sort'] : ''), (isset($_REQUEST['order']) ? $_REQUEST['order'] : '')));

            $this->renderPartial('grid_batch', array('data' => $data,));
            Yii::app()->end();
            }
            $this->render('grid_batch_view',array('model'=>$model));
            
	}
        
        public function actionCsvexport()
	{ 
            $request_class=$_REQUEST['class'];
            
            //if(!isset($row['regid']) || count($row['regid'])==0 ){
            if(!isset($request_class) ){
               $this->redirect(array('mrCourseRegistration/batch?class='.$request_class));
            }            
            
            $subSql=" AND mr.class_id='".$request_class."'";
            $sql ="select mr.id as regid,ms.mobile,mr.student_id,mr.cirtificate_status,mr.creat_date, mr.details_during_reg, 
                    mc.id,mc.class_details,mo.course_name,mr.cirtificate_no,mr.cirtificate_grade from mr_course_registration mr
                    LEFT JOIN mr_class mc ON mc.id=mr.class_id
                    LEFT JOIN mr_course mo ON mo.id=mr.course_id
                    LEFT JOIN mr_students ms ON ms.id=mr.student_id WHERE 1=1 ".$subSql." order by mc.id DESC";            
            $resultp = Yii::app()->db->createCommand($sql)->queryAll();
            
           
            
            if(isset($_POST['export_cert_csv']) && $_POST['export_cert_csv']=="Export Cirtification CSV"){               

                if(count($resultp)>0){
                $data="SL,Name,Date Of Birth,Indos No,Passport No,CDC NO, Date of Join,Cirtificate No, Grade"."\n";

                $i=1;
                foreach($resultp as $row ){  
                    
                    if( in_array($row['regid'], $_POST['std'])){                
                        $student_details=json_decode( preg_replace('/\s+/', '', $row['details_during_reg']), true );                
                        $name=$student_details['firstname']." ".$student_details['lastname'];
                        $dob=date("d-m-Y",  strtotime($student_details['dob']));
                        $indosNo=$student_details['INDOSNO'];
                        $passportNo=$student_details['passportno'];
                        $cdcNo=$student_details['CDCNO'];
                        $cert_No=$row['cirtificate_no'];
                        $grade=$row['cirtificate_grade'];
                        $dateofJoin=date("d-m-Y",  strtotime($row['creat_date']));                
                        $data.=  $i.",". $name.",".$dob.",".$indosNo.",".$passportNo.",".$cdcNo.",".$dateofJoin.",".$cert_No.",".$grade."\n";
                        $i++;
                    }
                }

                header('Content-Type: application/csv');
                header('Content-Disposition: attachement; filename="cirtificate_export_'.date("d-m-Y").'.csv"');
                echo $data; 
                //$this->redirect(array('mrCourseRegistration/batch?class='.$request_class));
                exit();   
                }
               
           } 
           else{          
            ///registration-----------------------------------------------------   
           
                if(count($resultp)>0){
                $data="SL,Name,Date Of Birth,Indos No,Passport No,CDC NO, Date of Join"."\n";

                $i=1;
                foreach($resultp as $row ){  
                    if( in_array($row['regid'], $_POST['std'])){                
                        $student_details=json_decode( preg_replace('/\s+/', '', $row['details_during_reg']), true );                
                        $name=$student_details['firstname']." ".$student_details['lastname'];
                        $dob=date("d-m-Y",  strtotime($student_details['dob']));
                        $indosNo=$student_details['INDOSNO'];
                        $passportNo=$student_details['passportno'];
                        $cdcNo=$student_details['CDCNO'];
                        $dateofJoin=date("d-m-Y",  strtotime($row['creat_date']));                
                        $data.=  $i.",". $name.",".$dob.",".$indosNo.",".$passportNo.",".$cdcNo.",".$dateofJoin."\n";
                        $i++;
                    }
                }



                header('Content-Type: application/csv');
                header('Content-Disposition: attachement; filename="student_export.csv"');
                echo $data; 
                //$this->redirect(array('mrCourseRegistration/batch?class='.$request_class));
                exit();   
                }


            }
            
            
        }

        
}
