<?php
Shop::register('css/shop.css');
$this->renderPartial('/order/waypoint', array('point' => 3));

if(!isset($customer))
	$customer = new Customer;

	if(!isset($billingAddress))
		if(isset($customer->billingAddress))
			$billingAddress = $customer->billingAddress;
		else
			$billingAddress = new BillingAddress;

if(!isset($this->breadcrumbs))
	$this->breadcrumbs = array(
			Shop::t('Order'),
			Shop::t('Payment method'));
			
$form=$this->beginWidget('CActiveForm', array(
			'id'=>'customer-form',
			'action' => array('//shop/order/create'),
			'enableAjaxValidation'=>false,
			)); 
?>

<h2><?php echo Shop::t('Tipo de pago'); ?></h2>

<div class="current_address">
<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$customer->address,
			'htmlOptions' => array('class' => 'detail-view'),
			'attributes'=>array(
				'firstname',
				'lastname',
				'street',
				'zipcode',
				'city',
				
				),
			)); ?>
</div>
<br/>
<?php
echo CHtml::checkBox('toggle_billing',
			$customer->billingAddress !== NULL, array(
				'style' => 'float: left')); 
	echo CHtml::label(Shop::t('Usuario Alternativo'), 'toggle_billing', array(
				'style' => 'cursor:pointer'));
?>
<div class="form">
	<fieldset id="billing_information" style="display: none;" >
        <div class="payment_address">
        
        	<h3> <?php echo Shop::t('new payment address'); ?> </h3>
            <p><?php echo Shop::t('Shipping new address'); ?></p>
        
            <div class="row">
                <?php echo $form->labelEx($billingAddress,'firstname'); ?>
                <?php echo $form->textField($billingAddress,'firstname',array('size'=>45,'maxlength'=>45)); ?>
                <?php echo $form->error($billingAddress,'firstname'); ?>
            </div>
        
            <div class="row">
                <?php echo $form->labelEx($billingAddress,'lastname'); ?>
                <?php echo $form->textField($billingAddress,'lastname',array('size'=>45,'maxlength'=>45)); ?>
                <?php echo $form->error($billingAddress,'lastname'); ?>
            </div>
        
            <div class="row">
                <?php echo $form->labelEx($billingAddress,'street'); ?>
                <?php echo $form->textField($billingAddress,'street',array('size'=>45,'maxlength'=>45)); ?>
                <?php echo $form->error($billingAddress,'street'); ?>
            </div>
        
            <div class="row">
                <?php echo $form->labelEx($billingAddress,'city'); ?>
                <?php echo $form->textField($billingAddress,'zipcode',array('size'=>10,'maxlength'=>45)); ?>
                <?php echo $form->error($billingAddress,'zipcode'); ?>
        
                <?php echo $form->textField($billingAddress,'city',array('size'=>32,'maxlength'=>45)); ?>
                <?php echo $form->error($billingAddress,'city'); ?>
            </div>

		</div>
     </fieldset>
<br />
<hr />  
<h3> <?php echo Shop::t('Tipo de cago'); ?> </h3>



<?php
$i = 0;
foreach(PaymentMethod::model()->findAll() as $method) {
	echo '<div class="row-fluid">';
	echo CHtml::radioButton("PaymentMethod", $i == 0, array(
				'value' => $method->id));
	echo '<div class="float-left">';
	echo CHtml::label($method->title, 'PaymentMethod');
	
	echo '</div>';
	echo '</div>';
	echo '<div class="clear"></div>';
	$i++;
}
	?>


<div class="row buttons">
<?php
echo CHtml::submitButton(Shop::t('Continue'),array('id'=>'next'));
?>
</div>

<?php
echo '</div>';
$this->endWidget(); 
?>

<?php
Yii::app()->clientScript->registerScript('toggle', "
	if($('#toggle_billing').attr('checked'))
		$('#billing_information').show();

	$('#toggle_billing').click(function() { 
		$('#billing_information').toggle(500);
	});
"); 