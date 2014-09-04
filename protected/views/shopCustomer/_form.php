<?php
/* @var $this ShopCustomerController */
/* @var $model ShopCustomer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shop-customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_id'); ?>
		<?php echo $form->textField($model,'address_id'); ?>
		<?php echo $form->error($model,'address_id'); ?>
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
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->