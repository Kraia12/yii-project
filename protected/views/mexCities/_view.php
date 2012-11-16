
<ul class="view">
<?php foreach ($data->cities as $city): ?>
	<li>
		<?php echo CHtml::link(CHtml::encode(ucwords(strtolower($city->name))), array('mexCities/view','city'=>str_replace(' ','-',strtolower($city->name)),'state'=>str_replace(' ','-',strtolower($data->name)) )); ?>
	</li>
<?php endforeach; ?>
</ul>