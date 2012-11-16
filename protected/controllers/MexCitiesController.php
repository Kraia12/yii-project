<?php

class MexCitiesController extends Controller
{
	public function ActionIndex(){
		$this->render('index');
	}

	public function actionView($city,$state)
	{
		$feed = new IndeedFeed;
		$jobs = $feed->getFeed(str_replace('-','+',$city),str_replace('-','+',$state));
	/*	$dataProvider = new CArrayDataProvider($jobs,array(
			'pagination'=>array(
        	'pageSize'=>3,
    ),
			));*/
		$this->render('view',array(
			'city'=>$city,
			'state' => $state,
			'jobs' => $jobs,
		));
	}
}