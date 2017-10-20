<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Username,
);

$this->menu=array(
	array('label'=>'Dashboard', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->Username)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
	array('label'=>'List Member', 'url'=>array('member/index')),
	array('label'=>'Create Member', 'url'=>array('member/create')),
	array('label'=>'Manage Member', 'url'=>array('member/admin')),
);
?>

<h1>View User #<?php echo $model->Username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Username',
		
	),
)); ?>
