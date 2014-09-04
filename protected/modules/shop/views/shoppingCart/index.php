<h3> 
<?php echo Yii::t('ShopModule.shop', 'Requisicion de compra'); ?> 
</h3>
<hr />

<?php 

if(!isset($carts))
	$carts = ShoppingCart::getCartsofOwner();

if(isset($carts)) 
{  
	echo '<ul>';
	foreach($carts as $cart) {
		printf('<li> <b>%s</b> %s %s <b>%s</b> | (%s)</li>', 
			$cart->amount, 
			$cart->Product->unit, 
			Yii::t('ShopModule.shop', 'of'), 
			CHtml::link($cart->Product->title, 
				array('products/view', 'id' => $cart->Product->product_id)
			),
			CHtml::link(Yii::t('ShopModule.shop', 'Eliminar del carro'),
	  		array('shoppingCart/delete', 'id' => $cart->cart_id)
	  	)
		) ;
	}
?>
	</ul>
	<hr />

<?php	echo CHtml::link(Yii::t('ShopModule.shop', 'Configurar carro'), array('shoppingCart/admin')); ?>

<?php	echo CHtml::link(Yii::t('ShopModule.shop', 'Comprar estos productos'), array('order/create')); 

} else
		echo Yii::t('ShopModule.shop', 'Su carro de compras esta vacio.');

?>
