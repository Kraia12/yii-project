<?php

class MexStatesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($name)
	{
		$name = str_replace('-', ' ', $name);
		$this->render('view',array(
			'model'=>$this->loadModel($name),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(
			'order' => 'name ASC',
			));
	    $models=MexStates::model()->findAll($criteria);
	    $this->render('index', array(
	    'models' => $models,
	    ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($name)
	{
		$model=MexStates::model()->with('cities')->findByAttributes(array('name'=>$name),
				array('order'=>'cities.name ASC')
			);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
