<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proveedor_id), array('view', 'id'=>$data->proveedor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->nom_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit')); ?>:</b>
	<?php echo CHtml::encode($data->nit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion2')); ?>:</b>
	<?php echo CHtml::encode($data->direccion2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Contacto')); ?>:</b>
	<?php echo CHtml::encode($data->Contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />

	*/ ?>

</div>