<?php
/* @var $this JobController */

$this->pageTitle='Trabajos!';
?>
<h1>This is Trabajos!</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

</div>
<?php $this->endWidget(); ?>
