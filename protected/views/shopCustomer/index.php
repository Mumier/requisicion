<?php
/* @var $this ShopCustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shop Customers',
);

$this->menu=array(
	array('label'=>'Create ShopCustomer', 'url'=>array('create')),
	array('label'=>'Manage ShopCustomer', 'url'=>array('admin')),
);
?>

<h1>Shop Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
