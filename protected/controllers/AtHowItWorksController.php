<?php

class AtHowItWorksController extends Controller
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
		$model=new AtHowItWorks;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtHowItWorks']))
		{
                    $rnd = rand(0,9999);  // generate random number between 0-9999
           $model->attributes=$_POST['AtHowItWorks'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'hwt_image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
           if(!empty($uploadedFile))
            $model->hwt_image = $fileName;
			
			if($model->save())
                        {     
                         if(!empty($uploadedFile)){
                            $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/'.$fileName);
                           $MyImageCom = new ImageComponent();  
                           $MyImageCom->prepare(Yii::app()->params['webRoot']."/uploads/".$fileName);
                           $MyImageCom->resize(140,140);//width,height,Red,Green,Blue
                           $MyImageCom->save(Yii::app()->params['webRoot']."/uploads/".$fileName);
                         }
                            Yii::app()->user->setFlash('successPages', 'Page has been created.');
				$this->redirect(array('update','id'=>$model->id));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['AtHowItWorks']))
		{
			 $rnd = rand(0,9999);  // generate random number between 0-9999
                         $_POST['Banner']['hwt_image'] = $model->hwt_image;
           $model->attributes=$_POST['AtHowItWorks'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'hwt_image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            if(!empty($uploadedFile))
            $model->hwt_image = $fileName;
			
			if($model->save())
                        {     if(!empty($uploadedFile))
                                {
                                $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/'.$fileName);
                                $MyImageCom = new ImageComponent();  
                                $MyImageCom->prepare(Yii::app()->params['webRoot']."/uploads/".$fileName);
                                $MyImageCom->resize(140,140);//width,height,Red,Green,Blue
                                $MyImageCom->save(Yii::app()->params['webRoot']."/uploads/".$fileName);
                                }
                        
                             Yii::app()->user->setFlash('successPages', 'Page has been updated.');
			$this->redirect(array('update','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('AtHowItWorks');
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
		$model=new AtHowItWorks('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AtHowItWorks']))
			$model->attributes=$_GET['AtHowItWorks'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AtHowItWorks the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AtHowItWorks::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AtHowItWorks $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='at-how-it-works-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
