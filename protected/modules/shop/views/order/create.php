<?php
$this->renderPartial('/order/waypoint', array('point' => 4));

$this->breadcrumbs=array(
		Shop::t('Order')=>array('index'),
		Shop::t('New Order'),
		);
?>

<?php 
Shop::renderFlash();
echo CHtml::beginForm(array('//shop/order/confirm'));
echo '<h2>'.Shop::t('Confirmation').'</h2>';


if(Shop::getCartContent() == array())
	return false;

	// If the customer is not passed over to the view, we assume the user is 
	// logged in and we fetch the customer data from the customer table
if(!isset($customer))
	$customer = Shop::getCustomer();
	$this->renderPartial('application.modules.shop.views.customer.view', array(
				'model' => $customer,
				'hideAddress' => true,
				'hideEmail' => true));
echo '<br />';
echo '<hr />';
				
				
echo '<p>';
	$shipping = ShippingMethod::model()->findByPk(Yii::app()->user->getState('shipping_method'));
	echo '<strong>'.Shop::t('Prioridad').': </strong>'.' '.$shipping->title.' ('.$shipping->description.')';
	echo '<br />';
	echo CHtml::link(Shop::t('Editar Prioridad'), array(
			'//shop/shippingMethod/choose', 'order' => true));
			echo '</p>';


echo '<p>';
	$payment = 	PaymentMethod::model()->findByPk(Yii::app()->user->getState('payment_method'));
	echo '<strong>'.Shop::t('Tipo de Pago').': </strong>'.' '.$payment->title.' ('.$payment->description.')';	
	echo '<br />';
	echo CHtml::link(Shop::t('Editar Tipo de Pago'), array(
			'//shop/paymentMethod/choose', 'order' => true));
echo '</p>';

echo '<hr />';

$this->renderPartial('application.modules.shop.views.shoppingCart.view'); 


echo '<h3>'.Shop::t('Por favor ingrese alguna observacion o justificacion').'</h3>'; 

echo CHtml::textArea('Order[Comment]',
		@Yii::app()->user->getState('order_comment'), array('style'=>'width:600px; height:100px;padding:10px;'));
		
echo '<br /><br />';

echo '<hr />';
$this->renderPartial(Shop::module()->termsView);

?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Shop::t('Confirm Order'),array ('id'=>'next'), array(
                '//shop/order/confirm')); ?>
</div>
<?php echo CHtml::endForm(); ?>