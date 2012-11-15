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

<ul>

<?php foreach($jobs as $job): ?>
	<li>
	<?php echo ucwords(strtolower($job->jobtitle)); ?>
	</li>
<? endforeach; ?>
</ul>