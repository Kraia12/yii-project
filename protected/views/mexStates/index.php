<?php
/* @var $this MexStatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mex States',
);

$this->menu=array(
	array('label'=>'Create MexStates', 'url'=>array('create')),
	array('label'=>'Manage MexStates', 'url'=>array('admin')),
);
?>

<h1>Mex States</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
