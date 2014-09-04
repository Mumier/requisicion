<?php
$this->breadcrumbs=array();

?>

<h1> <?php echo Yii::t('ShopModule.shop', 'Componentes de la requisicion: '); ?> </h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'shopping cart-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Product.title',
		'amount',
		'Product.unit',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
