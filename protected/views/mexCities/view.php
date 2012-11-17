<?php
/* @var $this MexStatesController */
/* @var $data MexStates */
?>
<?php
include_once 'ArrayDataProvider.php';
$this->breadcrumbs=array(
	'Estados de Mexico' =>array('mexStates/index'),
	ucwords(str_replace('-',' ',$state))=>array('/'. $state ),
	ucwords(str_replace('-',' ',$city->name)),
);
?>

<div class="view">
	<h1> Trabajos En <?php echo ucwords(str_replace('-',' ',$city->name)) ?></h1>
	<br />
</div>
<?php
//$count = 300;
$viewData['dataProvider'] = new ArrayDataProvider(
			$jobs,
			array(
				'totalItemCount' => $total,
				'pagination'=>array(
					'pageSize' => 10,
				),
			)
		);
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$viewData['dataProvider'],
    'itemView'=>'_test',
));
?>
<span id=indeed_at><a href="http://www.indeed.com/">jobs</a> by <a
href="http://www.indeed.com/" title="Job Search"><img
src="http://www.indeed.com/p/jobsearch.gif" style="border: 0;
vertical-align: middle;" alt="Indeed job search"></a></span>

