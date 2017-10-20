<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->Idmember=>array('view','id'=>$model->Idmember),
	'Update',
);

$this->menu=array(
	array('label'=>'Dashboard', 'url'=>array('user/index')),
	array('label'=>'Create User', 'url'=>array('user/create')),
	array('label'=>'Manage User', 'url'=>array('user/admin')),
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'View Member', 'url'=>array('view', 'id'=>$model->Idmember)),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>Update Member <?php echo $model->Idmember; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>