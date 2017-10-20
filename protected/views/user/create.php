<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Dashboard', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
	array('label'=>'List Member', 'url'=>array('member/index')),
	array('label'=>'Create Member', 'url'=>array('member/create')),
	array('label'=>'Manage Member', 'url'=>array('member/admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>