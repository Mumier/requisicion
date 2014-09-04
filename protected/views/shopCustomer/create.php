<?php
/* @var $this ShopCustomerController */
/* @var $model ShopCustomer */

$this->breadcrumbs=array(
	'Shop Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShopCustomer', 'url'=>array('index')),
	array('label'=>'Manage ShopCustomer', 'url'=>array('admin')),
);
?>

<h1>Create ShopCustomer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>