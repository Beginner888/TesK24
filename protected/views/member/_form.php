<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Idmember'); ?>
		<?php echo $form->textField($model,'Idmember',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Idmember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namamember'); ?>
		<?php echo $form->textField($model,'namamember',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namamember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamatmember'); ?>
		<?php echo $form->textField($model,'alamatmember',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'alamatmember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggallahir'); ?>
		<?php echo $form->textField($model,'tanggallahir',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tanggallahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailmember'); ?>
		<?php echo $form->textField($model,'emailmember',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emailmember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notelpmember'); ?>
		<?php echo $form->textField($model,'notelpmember',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'notelpmember'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->