<?php

class AtActivityController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function actionView($id)
	{
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
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
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
		$model=new AtActivity;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtActivity']))
		{
                    
                    $rnd = rand(0,9999);  // generate random number between 0-9999
          $model->attributes=$_POST['AtActivity'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'activity_image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
           if(!empty($uploadedFile))
            $model->activity_image = $fileName;
                    
			
			if($model->save())
                        {
                            if(!empty($uploadedFile)){
                            $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/'.$fileName);
                          
                         }
                            Yii::app()->user->setFlash('successActivity', 'Activity has been created.');
				$this->redirect(array('admin','id'=>$model->id));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

        public function actionBook()
        {
            if(isset($_POST['uid']) && isset($_POST['aid'])){
             
                Yii::app()->db->createCommand("INSERT INTO `activity_booking` (`partner_activity_id`, `booked_by`, `created`) VALUES ('".$_POST['aid']."','".$_POST['uid']."',NOW())")->execute();
                echo "0";
                return true;
            }
            else
            {
                echo "1";
                return true;
            }
        }
        
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtActivity']))
		{
                    
                    $rnd = rand(0,9999);  // generate random number between 0-9999
                    $_POST['AtActivity']['activity_image'] = $model->activity_image;
          $model->attributes=$_POST['AtActivity'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'activity_image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
           if(!empty($uploadedFile))
            $model->activity_image = $fileName;
                    
			
			if($model->save())
                        {
                            if(!empty($uploadedFile)){
                            $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/'.$fileName);
                          
                         }
                            Yii::app()->user->setFlash('successActivity', 'Activity has been created.');
				$this->redirect(array('admin','id'=>$model->id));
                        }
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
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
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
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
		$dataProvider=new CActiveDataProvider('AtActivity');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
             Yii::app()->theme = 'admin';
		$this->layout='adminmain';
		$model=new AtActivity('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AtActivity']))
			$model->attributes=$_GET['AtActivity'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AtActivity the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AtActivity::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AtActivity $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='at-activity-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionSearchActivity($id=null)
    {
     $queryACTIVITY = "SELECT * FROM at_activity ORDER BY id";
           $resultACTIVITY = Yii::app()->db->createCommand($queryACTIVITY)->queryAll();
           if($id!='')
                $_POST['activity_id']=$id;
        


     $search_sql="SELECT pc.id as aid, pc.*,ac.*,u.* FROM at_partner_activity pc
     LEFT JOIN at_activity ac ON pc.activity_type_id=ac.id
     LEFT JOIN at_users u ON u.id=pc.user_id
	 LEFT JOIN at_partner_details pd ON pd.user_id=pc.user_id
     WHERE pc.activity_type_id='".$_POST['activity_id']."'";
     
     if(!isset($_SESSION['user_name'])) $search_sql.=" AND pc.is_paid='N' ";     
     if(isset($_POST['search_text'])) $search_sql.=" AND (u.firstname like '".$_POST['search_text']."%' OR u.firstname like '".$_POST['search_text']."%'"
             . " OR u.address1 like '%".$_POST['search_text']."%' )";
         
     $search_result= Yii::app()->db->createCommand($search_sql)->queryAll();

     $this->render('activitySearch',array(
      'search_result'=>$search_result, 'search_param'=>$_POST ,'resultACTIVITY'=>$resultACTIVITY
     ));

    }
   }
