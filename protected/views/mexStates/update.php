<?php
/* @var $this MexStatesController */
/* @var $model MexStates */

$this->breadcrumbs=array(
	'Mex States'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MexStates', 'url'=>array('index')),
	array('label'=>'Create MexStates', 'url'=>array('create')),
	array('label'=>'View MexStates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MexStates', 'url'=>array('admin')),
);
?>

<h1>Update MexStates <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>