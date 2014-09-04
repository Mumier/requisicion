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
echo '<br>';
echo CHtml::Button('Actualizar', array('submit' =>Yii::app()->createUrl("/shop/customer/update",array("id" => $model->customer_id))));
//echo CHtml::Button('Accept', array('submit' =>Yii::app()->createUrl("/adsBanner/accept", array("id" => $model->id_ads_banner)),'onClick'=>'confirm("Are you sure?")','name'=>'accept'));


?>
