<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop','Orders'),
);

?>
<h1>My Orders</h1>

<?php 

$model = new Order();

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'order_id',		
		'customer.address.firstname',
		'customer.address.lastname',
		'customer.address.street',
		'customer.address.zipcode',
		array('name' => 'ordering_date',
			'value' => 'date("M j, Y", $data->ordering_date)'),
		array(
			'class'=>'CButtonColumn', 
			'template' => '{view}',
			'viewButtonUrl' => 'Yii::app()->createUrl("/shop/order/view",
			array("id" => $data->order_id))',
		),

	),
)); ?>

