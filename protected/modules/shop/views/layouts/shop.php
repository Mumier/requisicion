<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid" id="page">

	<div id="header">
		<div id="logo"></div>

	</div><!-- header -->

		<div id="mainmenu">
		<?php
			$customer = Yii::app()->user->getState('customer_id');			
			$items = array();			
			$items[] = array('label'=>'Inicio', 'url'=>array('/site/index'));
			$items[] = array('label'=>'Mi perfil', 'url'=>array('/shop/customer/perfil/id/'.$customer));
			$items[] = array('label'=>'Productos', 'url'=>array('/shop/products/index'));			
			//$items[] = array('label'=>'Administrador', 'url'=>array('/shop/shop/admin'),'visible'=>Yii::app()->user->isAdmin());
			$items[] = array('label'=>'Mis Requisiciones', 'url'=>array('/shop/order/mine'));	
			$items[] = array('label'=>'Reporte', 'url'=>array('/shop/order/admin'),'visible'=>Yii::app()->user->isAdmin());
			$items[] = array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
			$items[] = array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);


 $this->widget('zii.widgets.CMenu',array( 			
			'items'=>$items,
		)); ?>
	</div><!-- mainmenu -->
	<div class="container-fluid">
	<div id="content">

	<div style="float: right; max-height: 200px; width: 200px; margin: 5px;">
		<?php
		$this->widget('ShoppingCartWidget'); 
		$this->widget('ProductCategoriesWidget'); 
		if(Yii::app()->user->isAdmin()) 
			$this->widget('AdminWidget');

		?>	
	</div>

	<div style="width: 1000px;">
	<?php echo $content; ?>
	</div>
	</div>
	</div>

	<div style="clear: both;"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Universidad de Santander.<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
