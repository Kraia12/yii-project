<?php

class MexCitiesController extends Controller
{
	public function ActionIndex(){
		$this->render('index');
	}

	public function actionView($city,$state,$page=0)
	{
		$city = $this->loadModel($city);
		$feed = new IndeedFeed;
		$start = 0;
		if(isset($page)){
			$start = ($page * 10) -10;
		}
		$jobs = $feed->getFeed(str_replace('-','+',$city->name),str_replace('-','+',$state),$start);
		$total = $jobs['total_results'];
		array_splice($jobs,0,1);
		$this->render('view',array(
			'city'=>$city,
			'state' => $state,
			'jobs' => $jobs,
			'total' => $total,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($name)
	{
		$model=MexCities::model()->findByAttributes(array('name'=>$name));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	
}