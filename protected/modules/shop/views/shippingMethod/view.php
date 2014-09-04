<?php
if(!isset($this->breadcrumbs))
	$this->breadcrumbs=array(
			'Shipping Methods'=>array('index'),
			$model->title,
			);

if(!isset($this->menu))
$this->menu=array(
	array('label'=>'List ShippingMethod', 'url'=>array('index')),
	array('label'=>'Create ShippingMethod', 'url'=>array('create')),
	array('label'=>'Update ShippingMethod', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ShippingMethod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShippingMethod', 'url'=>array('admin')),
);
?>

<h3> <?php echo Shop::t('Prioridad');?></h3>

<?php 
if($model)
	$this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'title',

					),
				)); ?>
