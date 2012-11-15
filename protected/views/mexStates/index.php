<?php
/* @var $this MexStatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estados de Mexico',
);
?>

<h1>Selecciona un Estado</h1>

<?php
 $this->renderPartial('/mexStates/_view', array(
	    'data' => $models,
	    ));
 ?>