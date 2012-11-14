<?php
/* @var $this MexStatesController */
/* @var $model MexStates */

$this->breadcrumbs=array(
	'Mex States'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MexStates', 'url'=>array('index')),
	array('label'=>'Manage MexStates', 'url'=>array('admin')),
);
?>

<h1>Create MexStates</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>