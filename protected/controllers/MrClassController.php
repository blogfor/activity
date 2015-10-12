<?php

class MrClassController extends Controller
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
		$model=new MrClass;
//                    print_r($_POST);
//                    echo $_POST['MrClass']['start_date'];
                     $_POST['MrClass']['start_date']=date("Y-m-d",strtotime($_POST['MrClass']['start_date']));
                     $_POST['MrClass']['end_date']=date("Y-m-d",strtotime($_POST['MrClass']['end_date']));
                   
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MrClass']))
		{
			$model->attributes=$_POST['MrClass'];
			if($model->save())
                        {
                             Yii::app()->user->setFlash('mrClassAdd', "Classes added.");
				$this->redirect(array('view','id'=>$model->id));
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MrClass']))
		{
			$model->attributes=$_POST['MrClass'];
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
		$dataProvider=new CActiveDataProvider('MrClass');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MrClass('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MrClass']))
			$model->attributes=$_GET['MrClass'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MrClass the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=MrClass::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MrClass $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mr-class-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
        function gridgetDateFormatStart($val) {
            return $this->getDateFormat($val['start_date']);
        }
        
        function gridgetDateFormatEnd($val) {
              return $this->getDateFormat($val['end_date']);
        }
        
        function gridCourseName($val) {
            return MrCourse::model()->findByPk($val['course_id'])->course_name;
        }
	
        
	function gridgeCountReservation($val) {			
            $sql = "SELECT count(*) as tot from mr_course_registration where class_id='".$val['id']."' ";
            $data = Yii::app()->db
            ->createCommand($sql)
            ->queryAll();

            if($data[0]['tot'] > $val['capacity'] )
            return "<p style='color:red'><b>".$val['capacity']."/".$data[0]['tot']."</b></p>";
            else
            return "<p><b>".$val['capacity']."/".$data[0]['tot']."</b></p>";
        }
        
        function gridStudents($val) {
            
            return '<a href="'.$this->createUrl('mrCourseRegistration/batch/',array('class'=>$val['id'])).'"><b>View Students</b></a>';
        }        
        
}