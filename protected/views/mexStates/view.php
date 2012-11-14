<?php
/* @var $this MexStatesController */
/* @var $model MexStates */

$this->breadcrumbs=array(
	'Mex States'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MexStates', 'url'=>array('index')),
	array('label'=>'Create MexStates', 'url'=>array('create')),
	array('label'=>'Update MexStates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MexStates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MexStates', 'url'=>array('admin')),
);
?>

<h1>Ver Trabajos De <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
<?php
$cities =$model->cities;
foreach ($cities as $city) {
	var_dump($city->name);
}
?>
