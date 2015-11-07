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
            
            $queryHIW = "SELECT * FROM at_how_it_works ORDER BY id";
            $resultHIW = Yii::app()->db->createCommand($queryHIW)->queryAll();
            
            $queryKA = "SELECT * FROM at_kids_activities ORDER BY id";
            $resultKA = Yii::app()->db->createCommand($queryKA)->queryAll();
            
            Yii::app()->theme = 'activity';
           
	    $this->render('index',array('resultHIW'=>$resultHIW,'resultKA'=>$resultKA));
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
        
        public function actionSitelogin()
        {
        
            if(isset($_POST['user_name']) && isset($_POST['user_password'])){
                
                $sql_login=" SELECT * FROM at_users u"
                        . " WHERE u.username='".$_POST['user_name']."' AND u.password='".$_POST['user_password']."'  ";
                $QueryDataReg = Yii::app()->db->createCommand($sql_login)->queryRow();
              
                $_SESSION['user_name']=$QueryDataReg['username'];
                $_SESSION['user_firstname']=$QueryDataReg['firstname'];
                
                echo $_SESSION['user_name'];
            }
        }
        
        public function actionSitelogout()
        {
            session_destroy();
        }
        
        
        public function actionSiteregistration()
        {
           $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];                    
            $email=$_POST['email'];
            
            $sql_email=" SELECT count(u.email) as tot_email FROM at_users u"
                        . " WHERE u.email='".$email."' ";
            $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_email)->queryRow();
            
            if((int)$QueryEmailDuplicate['tot_email']>0){
                echo "duplicate_email";
                return;
            }
                       
            
            $sql=" INSERT INTO `at_users` (
            `firstname` ,
            `lastname` ,
            `email`          
            )
            VALUES (
            '$firstname',  '$lastname',  '$email' )";          

            echo Yii::app()->db->createCommand($sql)->execute();
            
            //EMAIL=============================================================
            $name='=?UTF-8?B?'.base64_encode($firstname).'?=';
            $subject='=?UTF-8?B?'.base64_encode("Registration Activation ").'?=';
            $headers="From: $firstname <{$email}>\r\n".
                    "Reply-To: {$email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/plain; charset=UTF-8";
                    
            
            $activation_link=Yii::app()->createUrl('/site/activateuser')."/?u=".  base64_encode($firstname."$".$email);
            $mail_body="Hi ".$firstname."<br>";
            $mail_body.="<br>Please click on activation link to activate your link.<br>";
            $mail_body.="<br>Activation Link:".$activation_link;
            
            //mail($email,$subject,$mail_body,$headers);
           
            echo "email_send";
            
        }
        
        public function actionActivateuser()
        {
            $data=explode("$",  base64_decode($_REQUEST['u']));     
            $sql_email=" SELECT count(u.email) as tot_email FROM at_users u"
                        ." WHERE u.email='".$data[1]."' and u.firstname='".$data[0]."'  ";
            $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_email)->queryRow();
            
            if((int)$QueryEmailDuplicate['tot_email']==1){
                
                $username=$data[1];
                $password=$this->random_password();
                $firstname=$data[0];
                $email=$data[1];
                
                $sql_user=" UPDATE at_users u set username='".$username."', password='".$password."'"
                         ." WHERE u.email='".$data[1]."' and u.firstname='".$data[0]."'  ";
                
                $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_user)->queryRow();
            
                //EMAIL=============================================================
                $name='=?UTF-8?B?'.base64_encode($firstname).'?=';
                $subject='=?UTF-8?B?'.base64_encode("Registration Activation ").'?=';
                $headers="From: $firstname <{$email}>\r\n".
                        "Reply-To: {$email}\r\n".
                        "MIME-Version: 1.0\r\n".
                        "Content-Type: text/plain; charset=UTF-8";


                $activation_link=Yii::app()->createUrl('/site/activateuser')."/?u=".  base64_encode($firstname."$".$email);
                $mail_body="Hi ".$firstname."<br>";
                $mail_body.="<br>Your login account details is below.<br>";
                $mail_body.="<br>User Name:".$username;
                $mail_body.="<br>Password:".$password;

                //mail($email,$subject,$mail_body,$headers);
                                
            }
            
        }
        
        function random_password( $length = 8 ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            $password = substr( str_shuffle( $chars ), 0, $length );
            return $password;
        }
        
        
        
        
        
}