<div class="container-fluid">
<ul>
<li> <?php echo CHtml::link(Shop::t('Categorias'), array('//shop/category/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Productos'), array('//shop/products/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Prioridades'), array('/shop/shippingMethod/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Tipos de Pago'), array('/shop/paymentMethod/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Requisicion'), array('/shop/order/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Proveedor'), array('/proveedor/admin')); ?> </li>
<li> <?php echo CHtml::link(Shop::t('Usuarios'), array('/shop/customer/admin')); ?> </li>

<?php if(isset(Yii::app()->controller->menu)) {
	foreach(Yii::app()->controller->menu as $value) {
		printf('<li>%s</li>', CHtml::link($value['label'], $value['url']));
	}
}
?>
</ul>
</div>

