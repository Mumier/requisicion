<?php
/* @var $this ShopOrderController */
/* @var $model ShopOrder */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_address_id'); ?>
		<?php echo $form->textField($model,'delivery_address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_address_id'); ?>
		<?php echo $form->textField($model,'billing_address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordering_date'); ?>
		<?php echo $form->textField($model,'ordering_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordering_done'); ?>
		<?php echo $form->textField($model,'ordering_done'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordering_confirmed'); ?>
		<?php echo $form->textField($model,'ordering_confirmed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_method'); ?>
		<?php echo $form->textField($model,'shipping_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->