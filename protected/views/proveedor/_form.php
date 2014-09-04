<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
		<?php echo $form->error($model,'proveedor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_proveedor'); ?>
		<?php echo $form->textField($model,'nom_proveedor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2'); ?>
		<?php echo $form->error($model,'telefono2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion2'); ?>
		<?php echo $form->textField($model,'direccion2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'direccion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contacto'); ?>
		<?php echo $form->textField($model,'Contacto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->