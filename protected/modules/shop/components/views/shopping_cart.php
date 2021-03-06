
<div id="shopping-cart">
<div id="shopping-cart-content">
<?php
if($products) {
	echo '<h3>'.CHtml::link(Shop::t('Shopping cart'), array(
				'//shop/shoppingCart/view')) . '</h3>';

	echo '<table cellpadding="0" cellspacing="0">';	
	foreach($products as $num => $position) { 
		$model = Products::model()->findByPk($position['product_id']);
		printf('<tr>
				<td class="cart-left widget_amount_'.$num.'">%s</td>
				<td class="cart-middle">%s</td>
				<td class="cart-right price_'.$num.'">%s</td></tr>',
				$position['amount'],
				$model->title,
				Shop::priceFormat($position['amount'] * $model->getPrice(@$position['Variations']))
				);
	}



	printf('<tr>
			<td colspan="3" class="cart-right cart-sum price_total"><strong>%s</strong></td>
			</tr>',
			Shop::getPriceTotal());
	echo '</table>';
}
?>

</div>
<div id="shopping-cart-footer">
	<?php	echo CHtml::link(Yii::t('ShopModule.shop', 'Generar Requisicion'), array('order/create')); ?>
</div>
</div>
