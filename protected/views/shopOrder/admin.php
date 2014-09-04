<?php
/* @var $this ShopOrderController */
/* @var $model ShopOrder */

$this->breadcrumbs=array(
	'Shop Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ShopOrder', 'url'=>array('index')),
	array('label'=>'Create ShopOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#shop-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Shop Orders</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'shop-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'order_id',
		'customer_id',
		'delivery_address_id',
		'billing_address_id',
		'ordering_date',
		'ordering_done',
		/*
		'ordering_confirmed',
		'payment_method',
		'shipping_method',
		'comment',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
