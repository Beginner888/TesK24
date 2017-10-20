<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Members',
);

$this->menu=array(
		array('label'=>'Dashboard', 'url'=>array('user/index')),
	array('label'=>'Create User', 'url'=>array('user/create')),
	array('label'=>'Manage User', 'url'=>array('user/admin')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
