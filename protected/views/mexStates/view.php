<?php
/* @var $this MexStatesController */
/* @var $model MexStates */
/*ar_dump($model);
die();*/
$this->breadcrumbs=array(
	'Estados de Mexico'=>array('index'),
	$model->name,
);
?>

<h1>Ver Trabajos De <?php echo $model->name; ?></h1>

<?php
 $this->renderPartial('/mexCities/_view', array(
	    'data' => $model,
	    ));
?>
