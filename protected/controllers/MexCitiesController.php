<?php

class MexCitiesController extends Controller
{
	public function ActionIndex(){
		$this->render('index');
	}

	public function actionView($name,$state)
	{
		$this->render('view',array(
			'name'=>$name,
			'state' => $state,
		));
	}

}