<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Idmember')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Idmember), array('view', 'id'=>$data->Idmember)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namamember')); ?>:</b>
	<?php echo CHtml::encode($data->namamember); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatmember')); ?>:</b>
	<?php echo CHtml::encode($data->alamatmember); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggallahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggallahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailmember')); ?>:</b>
	<?php echo CHtml::encode($data->emailmember); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notelpmember')); ?>:</b>
	<?php echo CHtml::encode($data->notelpmember); ?>
	<br />


</div>