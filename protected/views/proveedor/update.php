<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->proveedor_id=>array('view','id'=>$model->proveedor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->proveedor_id)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Update Proveedor <?php echo $model->proveedor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>