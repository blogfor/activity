<?php

class AtUsersController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
	public function accessRules()
	{
           
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';
        $model = new AtUsers;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['AtUsers'])) {
            $model->attributes = $_POST['AtUsers'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['AtUsers'])) {
            $model->attributes = $_POST['AtUsers'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';

        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $dataProvider = new CActiveDataProvider('AtUsers');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';


        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionPartner() {
        Yii::app()->theme = 'admin';
        $this->layout = 'adminmain';


        $model = new AtUsers('search_partner');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];


        $this->render('admin_partner', array(
            'model' => $model,
        ));
    }

    public function actionPartnerregistration() {
        Yii::app()->theme = 'activity';
        //$this->layout='adminmain';

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];

        if (isset($_POST) && isset($_POST['companyname'])) {
            $MailContent = new AtMailContent;
            $mailData = $MailContent->fetchMailContent(3);
            $mailData['body'] = str_replace("[COMPANY]", $_POST['companyname'], $mailData['body']);
            $mailData['body'] = str_replace("[WEBSITE]", $_POST['website'], $mailData['body']);
            $mailData['body'] = str_replace("[[NAME]]", $_POST['name'], $mailData['body']);
            $mailData['body'] = str_replace("[EMAIL]", $_POST['email'], $mailData['body']);
            $mailData['body'] = str_replace("[[PHONE]]", $_POST['mobile'], $mailData['body']);
            $mailData['body'] = str_replace("[[COMMENTS]]", $_POST['comments'], $mailData['body']);
            $msg = $mailData['body'];

            $msg .= $mailData['footer'];
            $emails[] = 'partners@activityhere.com';
            ActivityCommon::atMailSend($emails, 3, $msg, $mailData);

            Yii::app()->user->setFlash('successMail', 'Thank you for showing your interest. We will get back to you as soon as possible.');
        }

        $this->render('partnerregistration', array('model' => $model));
    }

    public function actionRegistrationpartner() {
        Yii::app()->theme = 'activity';
        //$this->layout='adminmain';

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];


        if (isset($_POST) && count($_POST) > 3) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $ctype = $_POST['ctype'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            //$childname1=$_POST['childname1'];
            //$childage1=$_POST['childage1'];

            $sql_email = " SELECT count(u.email) as tot_email FROM at_users u"
                    . " WHERE u.email='" . $email . "' ";
            $QueryEmailDuplicate = Yii::app()->db->createCommand($sql_email)->queryRow();

            if ((int) $QueryEmailDuplicate['tot_email'] > 0) {

                Yii::app()->user->setFlash('errorMailPartner', 'Email already in use. Please use different email.');
            } else {


                $sql = " INSERT INTO `at_users` (
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
            '$firstname',  '$lastname',  '$email','$ctype','" . $mobile . "','" . md5($password) . "','" . $email . "','" . base64_encode($firstname . "$" . $email) . "' )";

                Yii::app()->db->createCommand($sql)->execute();
                $insertid = Yii::app()->db->getLastInsertID();




                //EMAIL=============================================================


                $activation_link = Yii::app()->getBaseUrl(true) . '/site/activateuser' . "/?u=" . base64_encode($firstname . "$" . $email);


                $MailContent = new AtMailContent;
                $mailData = $MailContent->fetchMailContent(1);
                $mailData['body'] = str_replace("[LINK]", $activation_link, $mailData['body']);
                $mailData['body'] = str_replace("[EMAIL]", $email, $mailData['body']);
                $mailData['body'] = str_replace("[PASSWORD]", $password, $mailData['body']);
                $msg = $mailData['body'];

                $msg .= $mailData['footer'];
                $emails[] = $email;
                ActivityCommon::atMailSend($emails, 1, $msg, $mailData);
                Yii::app()->user->setFlash('successMailPartner', 'Please check your email for the activation link.');
            }
        }

        $this->render('registrationpartner', array('model' => $model));
    }

    public function actionProfiledtls() {
        Yii::app()->theme = 'activity';
        //$this->layout='adminmain';

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];

        $user_data = AtUsers::model()->findByPk($_SESSION['user_id']);

        if (!isset($user_data) && count($user_data) == 0)
            $this->redirect(Yii::app()->createUrl('/site/index'));
      

        $this->render('profiledtls', array(
            'model' => $model, 'user_data' => $user_data
        ));
    }
    
    public function actionPartnerdtls() {
        Yii::app()->theme = 'activity';
        //$this->layout='adminmain';

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];

        $user_data = AtUsers::model()->findByPk($_SESSION['user_id']);
		
		$pertner_activity_sql="SELECT * FROM at_partner_activity pa LEFT JOIN at_activity ac ON ac.id=pa.activity_type_id WHERE pa.user_id='".$_SESSION['user_id']."'";
		$activity_data = Yii::app()->db->createCommand($pertner_activity_sql)->queryAll();

        if (!isset($user_data) && count($user_data) == 0)
            $this->redirect(Yii::app()->createUrl('/site/index'));

        $user_act="select activity_ids from at_partner_details where user_id='".$_SESSION['user_id']."'";
        $Queryactivity= Yii::app()->db->createCommand($user_act)->queryRow();
                
        $sql="select * from at_activity where id in (".$Queryactivity['activity_ids'].")";
        $user_activity = Yii::app()->db->createCommand($sql)->queryAll();


        $this->render('partnerdtls', array(
            'model' => $model, 'user_data' => $user_data, 'activity_data'=>$activity_data,'user_selected_activity'=>$user_activity
        ));
    }

    public function actionUpdateProfile() {

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];
        $user_data = Array
            (
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address1' => $_POST['address1'],
            'zipcode' => $_POST['zipcode'],
            'email' => $_POST['email'],
            'office_phone' => $_POST['office_phone'],
            'home_phone' => $_POST['home_phone']
        );
        AtUsers::model()->updateByPk($_SESSION['user_id'], $user_data);


        $this->redirect(Yii::app()->createUrl('/atUsers/profiledtls'));
    }

    public function actionUpdateProfileAccount() {

        $model = new AtUsers('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['AtUsers']))
            $model->attributes = $_GET['AtUsers'];


        if ((isset($_POST['password']) && isset($_POST['password'])) && ($_POST['password'] == $_POST['con_password']) && !empty($_POST['con_password'])) {
            $user_data = Array
                (
                'username' => $_POST['username'],
                'password' => md5($_POST['password'])
            );
        } else {

            $user_data = Array
                (
                'username' => $_POST['username'],
            );
        }

        AtUsers::model()->updateByPk($_SESSION['user_id'], $user_data);


        $this->redirect(Yii::app()->createUrl('/atUsers/profiledtls'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return AtUsers the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = AtUsers::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param AtUsers $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'at-users-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

        
        public function actionEmailFormSubmit() {
            Yii::app()->theme = 'activity';
            
            $MailContent = new AtMailContent;
                        $mailData = $MailContent->fetchMailContent(5);
                        $mailData['body'] = str_replace("[MESSAGE]", $_POST['messagebody'], $mailData['body']);                     
                        $msg = $mailData['body'];                       
                        $msg .= $mailData['footer'];
                        $emails[]=$_POST['email'];                     
                        //print_r($mailData);
                        ActivityCommon::atMailSend($emails,5,$msg,$mailData);
                   
            Yii::app()->user->setFlash('successMailPartner', 'Mail succesfully send to '.$_POST['email']);
            
            if($_POST['usertype']=="partner")
            $this->redirect(Yii::app()->createUrl('/atUsers/partner'));
            else 
            $this->redirect(Yii::app()->createUrl('/atUsers/admin'));    

    }
    
    function gridgeCountChilds($val) {
        $sql = "SELECT count(*) as tot from at_users_child where user_id='" . $val['id'] . "' ";
        $data = Yii::app()->db
                ->createCommand($sql)
                ->queryAll();

        if ($data[0]['tot'] == 0) {
            return "<p style='color:red;'> No</p>";
        } else {
            return "<p style='color:red; cursor:pointer' title='" . $val['id'] . "' class='totbtn'><b>" . $data[0]['tot'] . "</b>"
                    . "<a style='cursor:pointer'> View </a>"
                    . "</p>";
        }
    }

    function gridgeSendEmail($val) {
        $sql_model = AtUsers::model()->findByPk($val['id']);

        if (empty($sql_model['email'])) {
            return "<p style='color:red;'> Not Yet</p>";
        } else {
            return "<p style='color:red; cursor:pointer' title='" . $val['id'] . "' class='send_email'>"
                    . "<a style='cursor:pointer'> Send Email </a>"
                    . "</p>";
        }
    }

    

    public function actionEmailForm() {

        $sql_model = AtUsers::model()->findByPk($_POST['userid']);

        $str = "To : " . $sql_model['email'];
        // $str.='<br><br><input type="text" name="messagesub" placeholder="Subject" style="width:80%"  >';
        $str.='<br><br><textarea name="messagebody" id="messagebody" style="width:100%; height:150px;" placeholder="Message Text" ></textarea>';
        $str.='<br><br><input type="submit" name="messagesubmit" class="btn btn-primary"  >';
        $str.='<input type="hidden" name="email" value="' . $sql_model['email'] . '">';
        $str.='<input type="hidden" name="usertype" value="' . $_POST['usertype'] . '">';
        echo $str;
    }

    public function actionGetchilds() {

        $sql = "SELECT * from at_users_child where user_id='" . $_POST['userid'] . "' order by child_age ";
        $data = Yii::app()->db
                ->createCommand($sql)
                ->queryAll();



        if (count($data) > 0) {

            $html = '<table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                <th>Name</th>
                <th>Age</th>
                </tr>
                </thead>
                <tbody>';


            foreach ($data as $allchilds) {

                $html.="<tr><td>" . $allchilds['child_name'] . "</td>";
                $html.="<td>" . $allchilds['child_age'] . "</td></tr>";
            }

            $html.="</tbody></table>";
        }

        echo $html;
    }
    
    
    
    
    public function actionAddPartnerActivity(){
        
        print_r($_POST);
        echo "erwerwer";
        
        print_r($_SESSION);
        
            $sql = " INSERT INTO `at_partner_activity` (
            `user_id` ,
            `activity_type_id` ,
            `age_range` ,
            `activity_date`,
            `activity_time`
          
            )
            VALUES (
            '$firstname',  '$lastname',  '$email','$ctype','" . $mobile . "','" . md5($password) . "','" . $email . "','" . base64_encode($firstname . "$" . $email) . "' )";

              //  Yii::app()->db->createCommand($sql)->execute();
                 Yii::app()->user->setFlash('successMailPartner', 'Mail succesfully send to '.$_POST['email']);
           
        
    }

}
