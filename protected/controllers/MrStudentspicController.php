<?php

class MrStudentspicController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/adminmain';




	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	public function actionCreate()
	{
		$model=new MrStudents;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MrStudents']))
		{
			$model->attributes=$_POST['MrStudents'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['MrStudents']))
		{
			$model->attributes=$_POST['MrStudents'];
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
		$dataProvider=new CActiveDataProvider('MrStudents');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MrStudents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MrStudents']))
			$model->attributes=$_GET['MrStudents'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	
	public function actionUpload()
	{
		$this->renderPartial('uploadpic');		
		//$this->render('uploadpic');		
	}
	
	
	public function actionUploadpic()
	{
	  $picno=date("Y-m-d-h-i-s").rand(100,5000);	
		Yii::app()->session['student_pic'] =$picno;
		$data = str_replace('data:image/png;base64,', '', $_POST['pic']);
		$data = str_replace(' ', '+', $data);
		$data = base64_decode($data);
		
		$webroot = Yii::getPathOfAlias('webroot');
		//echo $file =  $webroot . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'name.php';
		$file =  $webroot . "/" . 'images' . "/" .$picno.'.png';
		$handle = fopen($file, 'w');
		fwrite($handle,$data);
		echo $picno.'.png';
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MrStudents the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=MrStudents::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MrStudents $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mr-students-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
