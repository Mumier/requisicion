<?php
$this->renderPartial('/order/waypoint', array('point' => 1));

if(!isset($customer))
	$customer = new Customer;

if(!isset($address))
	$address = new Address;

$this->breadcrumbs=array(
		Yii::t('ShopModule.shop', 'Usuarios')=>array('index'),
		Yii::t('ShopModule.shop', 'Registrar nuevo usuario'),
		);

?>


<h3><?php echo Shop::t('Soy un usuario nuevo'); ?></h3>
<p><?php echo Shop::t('Informacion de registro'); ?></p>
<h3><p><strong> <?php echo Shop::t('Por favor ingrese sus datos de usuario'); ?></strong> </p></h3>
	<?php

if($address === null)
	$address = new Address;

if(!isset($deliveryAddress) || $deliveryAddress === null)
	$deliveryAddress = new DeliveryAddress;

if(!isset($billingAddress) || $billingAddress === null)
	$billingAddress = new BillingAddress;

 echo $this->renderPartial('/customer/_form', array(
				'action' => isset($action) ? $action : null,
				'customer'=>$customer,
				'address' =>$address,				
				'deliveryAddress' => $deliveryAddress,
				'billingAddress' => $billingAddress,
				)); ?>
