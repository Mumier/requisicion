<?php
/* @var $this ShopOrderController */
/* @var $model ShopOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shop-order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_address_id'); ?>
		<?php echo $form->textField($model,'delivery_address_id'); ?>
		<?php echo $form->error($model,'delivery_address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_id'); ?>
		<?php echo $form->textField($model,'billing_address_id'); ?>
		<?php echo $form->error($model,'billing_address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordering_date'); ?>
		<?php echo $form->textField($model,'ordering_date'); ?>
		<?php echo $form->error($model,'ordering_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordering_done'); ?>
		<?php echo $form->textField($model,'ordering_done'); ?>
		<?php echo $form->error($model,'ordering_done'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordering_confirmed'); ?>
		<?php echo $form->textField($model,'ordering_confirmed'); ?>
		<?php echo $form->error($model,'ordering_confirmed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method'); ?>
		<?php echo $form->error($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_method'); ?>
		<?php echo $form->textField($model,'shipping_method'); ?>
		<?php echo $form->error($model,'shipping_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->