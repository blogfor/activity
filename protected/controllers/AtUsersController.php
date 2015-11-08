<?php

class AtUsersController extends Controller
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
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
//	public function accessRules()
//	{
//           
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
//	}

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
        $model=new AtUsers;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtUsers']))
		{
			$model->attributes=$_POST['AtUsers'];
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
	Yii::app()->theme = 'admin';
        $this->layout='adminmain';
        $model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtUsers']))
		{
			$model->attributes=$_POST['AtUsers'];
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
		
            $dataProvider=new CActiveDataProvider('AtUsers');
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
        
      
                $model=new AtUsers('search');
		$model->unsetAttributes();  // clear any default values
                
		if(isset($_GET['AtUsers']))
			$model->attributes=$_GET['AtUsers'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AtUsers the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AtUsers::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AtUsers $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='at-users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        function gridgeCountChilds($val) {			
            $sql = "SELECT count(*) as tot from at_users_child where user_id='".$val['id']."' ";
            $data = Yii::app()->db
            ->createCommand($sql)
            ->queryAll();

            if($data[0]['tot']==0){
                return "<p style='color:red;'> No</p>";
            }else{
            return "<p style='color:red; cursor:pointer' title='".$val['id']."' class='totbtn'><b>".$data[0]['tot']."</b>"
                    ."<a style='cursor:pointer'> View </a>"
                    ."</p>";
            }
           
        }
        
        
        public function actionGetchilds(){
        
            $sql = "SELECT * from at_users_child where user_id='".$_POST['userid']."' order by child_age ";
            $data = Yii::app()->db
            ->createCommand($sql)
            ->queryAll();
           

                   
           if(count($data)>0){
                          
                $html='<table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                <th>Name</th>
                <th>Age</th>
                </tr>
                </thead>
                <tbody>';
               foreach($data as $allchilds){
                   
                  $html.="<tr><td>".$allchilds['child_name']."</td>";
                  $html.="<td>". $allchilds['child_age']."</td></tr>";
                   
                   
               }
               
               $html.="</tbody></table>";
               
           } 
           
           echo $html;
          
        } 
        
        
        
        
}
