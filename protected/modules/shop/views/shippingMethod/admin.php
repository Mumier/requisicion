<?php
$this->breadcrumbs=array(
	'Shipping Methods'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Prioridad', 'url'=>array('index')),
	array('label'=>'Crear Prioridad', 'url'=>array('create')),
);

?>

<h1>Administrar Prioridades</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'shipping-method-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'tax_id',
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
