<?php
if(!isset($hideEmail)) {
	echo '<h3>'.Shop::t('Informacion de Usuario').'</h3>';
	
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'address.firstname',
		'address.lastname',
		'address.street',
		'address.zipcode',
		'address.city',
		'address.country',
	),
)); 
}

echo CHtml::link(Shop::t('').' '.Shop::t('Cambiar Datos'), array(
			'//shop/shippingMethod/choose', 'order' => true)); 
echo '</div>';


?>
