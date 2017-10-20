<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dashboard',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
	array('label'=>'List Member', 'url'=>array('member/index')),
	array('label'=>'Create Member', 'url'=>array('member/create')),
	array('label'=>'Manage Member', 'url'=>array('member/admin')),
);
?>

<h1>Selamat Datang di halaman User</h1>

