<?php
/* @var $this ShopCustomerController */
/* @var $model ShopCustomer */

$this->breadcrumbs=array(
	'Shop Customers'=>array('index'),
	$model->customer_id=>array('view','id'=>$model->customer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShopCustomer', 'url'=>array('index')),
	array('label'=>'Create ShopCustomer', 'url'=>array('create')),
	array('label'=>'View ShopCustomer', 'url'=>array('view', 'id'=>$model->customer_id)),
	array('label'=>'Manage ShopCustomer', 'url'=>array('admin')),
);
?>

<h1>Update ShopCustomer <?php echo $model->customer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>