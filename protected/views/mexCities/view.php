<?php
/* @var $this MexStatesController */
/* @var $data MexStates */
?>
<?php
$this->breadcrumbs=array(
	'Estados de Mexico' =>array('mexStates/index'),
	ucwords(str_replace('-',' ',$state))=>array('/'. $state ),
	ucwords(str_replace('-',' ',$city)),
);
?>

<div class="view">
	<h1> Trabajos En <?php echo ucwords(str_replace('-',' ',$city)) ?></h1>
	<br />
</div>

<?php foreach($jobs as $job): ?>
<dl class="job clearfix">
	<dt>Trabajo</dt>
	<dd><?php echo ucwords(strtolower($job->jobtitle)); ?></dd>
	<dt>Compañia</dt>
	<dd><?php echo ucwords(strtolower($job->company)); ?></dd>
	<dt>Fecha</dt>
	<dd><?php echo $job->date; ?></dd>
	<dt class="description-dt">Descripción</dt>
	<dd class="description-dd"><?php echo $job->snippet; ?></dd>
	<dt>Mas información:</dt>
	<dd><?php echo CHtml::link("Visitar aqui",$job->url,array('onclick'=>$job->onmousedown)); ?></dd>
</dl>
<? endforeach; ?>
<span id=indeed_at><a href="http://www.indeed.com/">jobs</a> by <a
href="http://www.indeed.com/" title="Job Search"><img
src="http://www.indeed.com/p/jobsearch.gif" style="border: 0;
vertical-align: middle;" alt="Indeed job search"></a></span>

