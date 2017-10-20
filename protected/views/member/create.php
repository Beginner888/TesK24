<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Dashboard', 'url'=>array('user/index')),
	array('label'=>'Create User', 'url'=>array('user/create')),
	array('label'=>'Manage User', 'url'=>array('user/admin')),
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>Create Member</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>