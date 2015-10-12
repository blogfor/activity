<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $this->layout='admin';
            $model=new LoginForm;

            if(isset($_SESSION['superUser']))
            {
                $this->redirect(array('dashboard'));
            }
            
            if(isset($_POST) && isset($_POST['userlogin']))
            {
                if($_POST['userlogin']==trim('admin') && $_POST['userpassword']==trim('admin'))
                {                   
                    $_SESSION['superUser']=1;
                    $this->redirect(array('dashboard'));
                    exit;
                }
                else
                    Yii::app()->user->setFlash('loginMessage', "Please enter proper user name / password");
            }
            
	    $this->render('index');
	}
	
	public function actionDashboard()
	{           
            $this->layout='adminmain';             
           
            // today classes =============================
            $resultp=array();	
            $queryp = " select * from mr_class c "               
                    . " LEFT JOIN mr_course co ON co.id=c.course_id"
                    . " where SYSDATE() BETWEEN start_date AND end_date order by start_date";
            $resultp = Yii::app()->db->createCommand($queryp)->queryAll();
            
            //today registrations =========================
            $query_reg = "select * from mr_course_registration where DATE(creat_date)=CURRENT_DATE()";
            $result_reg = Yii::app()->db->createCommand($query_reg)->queryAll();
            
            //Total students ==============================
            $query_student= "select * from mr_students";
            $result_std = Yii::app()->db->createCommand($query_student)->queryAll();
            
            //Total courses ==============================
            $query_course= "select * from mr_course where status='Y'";
            $result_course = Yii::app()->db->createCommand($query_course)->queryAll();
                     
            $this->render('dashboard',array('model'=>$resultp,'tot_reg'=>$result_reg,'students'=>$result_std,'course'=>$result_course));
	}
        
        
        public function actionDashboardsearch()
	{      
            $this->layout='adminmain'; 
            $model=array();
            
               if(isset($_POST['dashboard_search'])){
                  $model=$this->global_students_search($_POST['dashboard_search']); 
               }
               
            $this->render('dashboard_search',array('model'=>$model));
	
        }
        
        public function search_registration($student_id)
	{   
            if(isset($student_id)){
            $sql_registrations=" SELECT r.id as regid,co.*,r.*,cl.* FROM mr_course_registration r"
                    . " LEFT JOIN mr_course co ON co.id=r.course_id"
                    . " LEFT JOIN mr_class cl ON cl.id=r.class_id"
                    . " WHERE r.student_id='".$student_id."' order by creat_date DESC ";
            $QueryDataReg = Yii::app()->db->createCommand($sql_registrations)->queryAll();
            return $QueryDataReg;
            }
        }
        
        public function search_payments($reg_id)
	{ 
             $sql_registrations=" SELECT sum(amount) as tot_amt FROM mr_course_registration_payment r"
                                . " WHERE r.registration_id='".$reg_id."'  ";
            $QueryDataReg = Yii::app()->db->createCommand($sql_registrations)->queryAll();
            return $QueryDataReg[0];
        }
        
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
             $this->layout='adminmain';
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
                

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
                         
				$this->redirect(Yii::app()->user->returnUrl);
                        }        
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		 unset($_SESSION['superUser']);
                      Yii::app()->user->setFlash('logoutMessage', "You have successfully logout");
                     $this->redirect(array('index'));
                     exit;
	}
}