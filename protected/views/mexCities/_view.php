
<ul>
<?php foreach ($data->cities as $city): ?>
	<li>
		<?php echo CHtml::link(CHtml::encode($city->name), array('mexCities/view','name'=>str_replace(' ','-',strtolower($city->name)),'state'=>str_replace(' ','-',strtolower($data->name)) )); ?>
	</li>
<?php endforeach; ?>
</ul>