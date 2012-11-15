<?php
/* @var $this MexStatesController */
/* @var $data MexStates */
?>

<ul class="view">
<?php foreach($data as $state): ?>
	<li>
	<?php echo CHtml::link(CHtml::encode($state->name), array('view','name'=>str_replace(' ','-',strtolower($state->name)))); ?>
	</li>
<? endforeach; ?>
</ul>