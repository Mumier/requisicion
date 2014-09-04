<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Customers')=>array('index'),
	Yii::t('ShopModule.shop', 'Manage'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		url: $(this).attr('action'),
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php 

$model = new Customer;


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		'address.zipcode',
		'address.city',
		'address.country',
		'email',
		'username',		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{update}{delete}',
			'viewButtonUrl' => 'Yii::app()->createUrl("/shop/customer/view",
			array("id" => $data->customer_id))',
			'updateButtonUrl' => 'Yii::app()->createUrl("/shop/customer/update",
			array("id" => $data->customer_id))',
			'deleteButtonUrl' => 'Yii::app()->createUrl("/shop/customer/delete",
			array("id" => $data->customer_id))'

		),
	),
)); 

echo CHtml::link(Shop::t('Ingresar nuevo Usuario'), array('customer/create'));

?>
