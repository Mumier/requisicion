<div id="shopcontent">

<H1> Administracion </H1>

<div class="span-8"> 
<?php $this->beginWidget('zii.widgets.CPortlet',
		array('title' => Yii::t('ShopModule.shop', 'Administrar Categorias'))); ?>
<?php $this->renderPartial('/category/admin'); ?>
<?php $this->endWidget(); ?>
</div>

<div class="col-md-8"> 
<?php $this->beginWidget('zii.widgets.CPortlet',
		array('title' => Yii::t('ShopModule.shop', 'Administrar Productos'))); ?>
<?php $this->renderPartial('/products/admin'); ?>
<?php $this->endWidget(); ?>
</div>

<div class="clear">

	<div class="span-8 "> 
		<?php $this->beginWidget('zii.widgets.CPortlet',
				array('title' => Yii::t('ShopModule.shop', 'Requisitos'))); ?>
		<?php $this->renderPartial('/order/admin'); ?>
		<?php $this->endWidget(); ?>
	</div>
</div>


	<div class="col-md-8 span-12"> 
<?php $this->beginWidget('zii.widgets.CPortlet',
		array('title' => Yii::t('ShopModule.shop', 'Usuarios'))); ?>
<?php $this->renderPartial('/customer/admin'); ?>
<?php $this->endWidget(); ?>
</div>


<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('ShopModule.shop', 'Administration'),
);

?>


