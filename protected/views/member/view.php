<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->Idmember,
);

$this->menu=array(
	array('label'=>'Dashboard', 'url'=>array('user/index')),
	array('label'=>'Create User', 'url'=>array('user/create')),
	array('label'=>'Manage User', 'url'=>array('user/admin')),
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Update Member', 'url'=>array('update', 'id'=>$model->Idmember)),
	array('label'=>'Delete Member', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Idmember),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>View Member #<?php echo $model->Idmember; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Idmember',
		'namamember',
		'alamatmember',
		'tanggallahir',
		'emailmember',
		'notelpmember',
	),
)); ?>
