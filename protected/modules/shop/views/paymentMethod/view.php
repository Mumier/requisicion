<?php
if(!isset($this->breadcrumbs))
	$this->breadcrumbs=array(
			Shop::t('Payment Methods')=>array('index'),
			$model->title,
			);

if(!isset($this->menu))
$this->menu=array(
	array('label'=>'Crear Tipo de Pago', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Pago', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tipo de Pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo de Pago', 'url'=>array('admin')),
);
?>

<h3> <?php echo Shop::t('Tipo de Pago') ?> </h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',

	),
)); ?>
