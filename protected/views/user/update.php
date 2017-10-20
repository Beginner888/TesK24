<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Username=>array('view','id'=>$model->Username),
	'Update',
);

$this->menu=array(
	array('label'=>'Dashboard', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->Username)),
	array('label'=>'Manage User', 'url'=>array('admin')),
	array('label'=>'List Member', 'url'=>array('member/index')),
	array('label'=>'Create Member', 'url'=>array('member/create')),
	array('label'=>'Manage Member', 'url'=>array('member/admin')),
);
?>

<h1>Update User <?php echo $model->Username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>