<dl class="job clearfix">
	<dt>Trabajo</dt>
	<dd><?php echo ucwords(strtolower($data->jobtitle)); ?></dd>
	<dt>Compañia</dt>
	<dd><?php echo ucwords(strtolower($data->company)); ?></dd>
	<dt>Fecha</dt>
	<dd><?php echo $data->date; ?></dd>
	<dt class="description-dt">Descripción</dt>
	<dd class="description-dd"><?php echo $data->snippet; ?></dd>
	<dt>Mas información:</dt>
	<dd><?php echo CHtml::link("Visitar aqui",$data->url,array('onclick'=>$data->onmousedown)); ?></dd>
</dl>