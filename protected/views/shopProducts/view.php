<?php
/* @var $this ShopProductsController */
/* @var $model ShopProducts */

$this->breadcrumbs=array(
	'Shop Products'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ShopProducts', 'url'=>array('index')),
	array('label'=>'Create ShopProducts', 'url'=>array('create')),
	array('label'=>'Update ShopProducts', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete ShopProducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShopProducts', 'url'=>array('admin')),
);
?>

<h1>View ShopProducts #<?php echo $model->product_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'category_id',
		'tax_id',
		'title',
		'description',
		'price',
		'language',
		'specifications',
	),
)); ?>
