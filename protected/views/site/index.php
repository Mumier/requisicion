<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="container-fluid">


<div class="jumbotron">
 <h1> <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>Bienvenido a la plataforma de requisiciones de compra de la universidad de santander.</p>

<p>Para poder crear una requisicion de compra debe de estar registrado en el sistema</p>

  <p><?php echo CHtml::link('Iniciar Sesion', array('site/login'), array('class' => 'btn btn-primary btn-lg'));?></p>
</div>
</div>
