<?php
/* @var $this ShopCustomerController */
/* @var $model ShopCustomer */

$this->breadcrumbs=array(
	'Shop Customers'=>array('index'),
	$model->customer_id,
);

$this->menu=array(
	array('label'=>'List ShopCustomer', 'url'=>array('index')),
	array('label'=>'Create ShopCustomer', 'url'=>array('create')),
	array('label'=>'Update ShopCustomer', 'url'=>array('update', 'id'=>$model->customer_id)),
	array('label'=>'Delete ShopCustomer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShopCustomer', 'url'=>array('admin')),
);
?>

<h1>View ShopCustomer #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'user_id',
		'address_id',
		'delivery_address_id',
		'billing_address_id',
		'email',
	),
)); ?>
