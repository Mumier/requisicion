<?php
$this->breadcrumbs=array(
	Yii::t('shop', 'Product')=>array('index'),
	Yii::t('shop', 'Crear'),
);
?>

<div id="shopcontent">

	<h1><?echo Yii::t('ShopModule.shop', 'Crear un nuevo producto'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
