<?php
Shop::register('css/shop.css');

if($this->id == 'shoppingCart')
	$this->renderPartial('/order/waypoint', array('point' => 0));

if(!isset($products)) 
	$products = Shop::getCartContent();

if(!isset($this->breadcrumbs) || ($this->breadcrumbs== array()))
	$this->breadcrumbs = array(
			Shop::t('Shop') => array('//shop/products/'),
			Shop::t('Requisicion de compra'));
?>

<h2><?php echo Shop::t('Requisicion de compra'); ?></h2>
<br>


<?php
if($products) {
	echo '<table cellpadding="0" cellspacing="0" class="shopping_cart">';
	printf('<tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th style="width:140px;">%s</th><th style="width:140px;">%s</th><th>%s</th></tr>',
			Shop::t('Imagen'),
			Shop::t('Cantidad'),
			Shop::t('Productos'),
			Shop::t(''),
			Shop::t('Precio unitario'),
			Shop::t('Subtotal'),
			Shop::t('Acciones')
);

	foreach($products as $position => $product) {
		if(@$model = Products::model()->findByPk($product['product_id'])) {
			$variations = '';
			if(isset($product['Variations'])) {
				foreach($product['Variations'] as $specification => $variation) {
					$specification = ProductSpecification::model()->findByPk($specification);
					if($specification->is_user_input)
						$variation = $variation[0];
					else
						$variation = ProductVariation::model()->findByPk($variation);

					$variations .= $specification . ': ' . $variation . '<br />';
				}
			}

			printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td  class="text-right">%s</td><td class="text-right price_'.$position.'">%s</td><td>%s</td></tr>',
					$model->getImage(0, true),
					CHtml::textField('amount_'.$position,
						$product['amount'], array(
							'size' => 4,
							'class' => 'amount_'.$position,
							)
						),
					$model->title,
					$variations,
					Shop::priceFormat($model->getPrice(@$product['Variations'])),
					Shop::priceFormat($model->getPrice(@$product['Variations'], @$product['amount'])),
					CHtml::link(Shop::t('Eliminar'), array(
							'//shop/shoppingCart/delete',
							'id' => $position), array(
								'confirm' => Shop::t('¿Desea eliminar este objeto?')))
					);

			Yii::app()->clientScript->registerScript('amount_'.$position,"
					$('.amount_".$position."').keyup(function() {
						$.ajax({
							url:'".$this->createUrl('//shop/shoppingCart/updateAmount')."',
							data: $('#amount_".$position."'),
							success: function(result) {
							$('.amount_".$position."').css('background-color', 'lightgreen');
							$('.widget_amount_".$position."').css('background-color', 'lightgreen');
							$('.widget_amount_".$position."').html($('.amount_".$position."').val());
							$('.price_".$position."').html(result);	
							$('.price_total').load('".$this->createUrl(
							'//shop/shoppingCart/getPriceTotal')."');
							},
							error: function() {
							$('#amount_".$position."').css('background-color', 'red');
							},

							});
				});
					");
			}
}
	if($shippingMethod = Shop::getShippingMethod()) {
		printf('<tr>
				<td></td>
				<td>1</td>
				<td>%s</td>
				<td></td>
				<td class="text-right">%s</td>
				<td class="text-right">%s</td>
				<td>%s</td></tr>',
				Shop::t('Shipping costs'),
				Shop::priceFormat($shippingMethod->price),
				Shop::priceFormat($shippingMethod->price),
				CHtml::link(Shop::t('edit'), array('//shop/shippingMethod/choose'))
				);
	}
echo '<tr>
<td class="text-right no-border" colspan="6">
<br><p class="price_total" style="float:right;">'.Shop::getPriceTotal().'</p></td>
<td class="no-border"></td></tr>';
echo '</table>';
?>

<?php

 if(Yii::app()->controller->id != 'order') {
echo '<div class="buttons">';
echo CHtml::link(Shop::t('Agregar otros productos'), array(
			'//shop/products'), array('class'=>'btn-previous'));

echo '<br />';
			
echo CHtml::link(Shop::t('Generar Requisicion'), array(
			'//shop/order/create'), array('class'=>'btn-next')); 
echo '</div>';
}

?>
<div class="clear"></div>

<?php

} else echo Shop::t('Su carro esta vacio'); ?>

