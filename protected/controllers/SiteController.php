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
            
            
             $queryBANNER = "SELECT * FROM at_banner ORDER BY id";
            $resultBANNER = Yii::app()->db->createCommand($queryBANNER)->queryAll();
            
            Yii::app()->theme = 'activity';
           
	    $this->render('index',array('resultHIW'=>$resultHIW,'resultKA'=>$resultKA,'resultBANNER'=>$resultBANNER));
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
        
       
        
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
              Yii::app()->theme = 'activity';
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
            $siteSettings=  ActivityCommon::get_setting_info();
            
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

				mail($siteSettings['site_email'],$subject,$model->body,$headers);
                                //mail('ramen488@gmail.com',$subject,$model->body,$headers);
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
                        . " WHERE u.username='".$_POST['user_name']."' AND u.password='".md5($_POST['user_password'])."'  ";
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
            $ctype=$_POST['ctype'];
             $mobile=$_POST['mobile'];
            $password=$_POST['password'];
             //$childname1=$_POST['childname1'];
             //$childage1=$_POST['childage1'];
            
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
            `email` ,
            `user_type`,
            `home_phone`,
            `password`,
            `username`,
            `verification`
            )
            VALUES (
            '$firstname',  '$lastname',  '$email','$ctype','".$mobile."','".md5($password)."','".$email."','".base64_encode($firstname."$".$email)."' )";          

            Yii::app()->db->createCommand($sql)->execute();
            $insertid=Yii::app()->db->getLastInsertID();
            
            for($i=1;$i<=4;$i++)
            {
                if($_POST['childname'.$i]!='')
                {
                     $sql="INSERT INTO `at_users_child` (
            `user_id` ,
            `child_name` ,
            `child_age` ,
            `added`,
            `modified`
            )
            VALUES (
            '".$insertid."',  '".$_POST['childname'.$i]."',  '".$_POST['childage'.$i]."',NOW(),NOW())";          

            Yii::app()->db->createCommand($sql)->execute();
                }
            }
            
            
            //EMAIL=============================================================
                              
            
            $activation_link=Yii::app()->getBaseUrl(true).'/site/activateuser'."/?u=".  base64_encode($firstname."$".$email);
            
            
            $MailContent = new AtMailContent;
                        $mailData = $MailContent->fetchMailContent(1);
                        $mailData['body'] = str_replace("[LINK]", $activation_link, $mailData['body']);
                         $mailData['body'] = str_replace("[EMAIL]", $email, $mailData['body']);
                          $mailData['body'] = str_replace("[PASSWORD]", $password, $mailData['body']);
                        $msg = $mailData['body'];
                       
                        $msg .= $mailData['footer'];
                        $emails[]=$email;
                        ActivityCommon::atMailSend($emails,1,$msg,$mailData);
           
            echo "email_send";
            
            Yii:app()->end();
        }
        
        
        public function actionSiteforgot()
        {
                              
            $email=$_POST['email'];
            $password=(rand(56,8956).str_shuffle('ACTIVITY'));
           
            
            $sql_email=" SELECT count(u.email) as tot_email FROM at_users u"
                        . " WHERE u.email='".$email."' ";
            $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_email)->queryRow();
            
            if((int)$QueryEmailDuplicate['tot_email']>0){
                
                  $MailContent = new AtMailContent;
                        $mailData = $MailContent->fetchMailContent(2);
                       
                         $mailData['body'] = str_replace("[EMAIL]", $email, $mailData['body']);
                          $mailData['body'] = str_replace("[PASSWORD]", $password, $mailData['body']);
                        $msg = $mailData['body'];
                       
                        $msg .= $mailData['footer'];
                        $emails[]=$email;
                        ActivityCommon::atMailSend($emails,2,$msg,$mailData);
                        
                Yii::app()->db->createCommand("UPDATE at_users SET password='".$password."'")->execute();
                echo "email_send";
                return;
            } else {
                 echo "email_not_send";
                return;
            }
                       
            
           
            
            Yii:app()->end();
        }
        
        public function actionActivateuser()
        {
            $data=explode("$",  base64_decode($_REQUEST['u']));     
            $sql_email=" SELECT count(u.email) as tot_email FROM at_users u"
                        ." WHERE u.email='".$data[1]."' and u.firstname='".$data[0]."'  ";
            $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_email)->queryRow();
            
            if((int)$QueryEmailDuplicate['tot_email']==1){
                
                
                
                $sql_user=" UPDATE at_users u set status='1'"
                         ." WHERE u.email='".$data[1]."' and u.firstname='".$data[0]."'  ";
                
                $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_user)->execute();
                    $this->redirect(array('site/index'));
                
                                
            }
            
        }
        
        function random_password( $length = 8 ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            $password = substr( str_shuffle( $chars ), 0, $length );
            return $password;
        }
        
        
        
        
        
}