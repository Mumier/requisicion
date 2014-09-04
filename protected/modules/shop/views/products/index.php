<?php
$this->breadcrumbs=array(
	Shop::t('Products'),
);
Shop::renderFlash();
?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		'price',
		array(
			'class'=>'CButtonColumn', 
			'template' => '{view}',
			'viewButtonUrl' => 'Yii::app()->createUrl("/shop/products/view",
				array("id" => $data->product_id))',
		)
	)
)
); 
