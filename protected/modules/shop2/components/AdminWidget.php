<?php

Yii::import('zii.widgets.CPortlet');

class AdminWidget extends CPortlet {
	public function	init() {
		$this->title = Shop::t('Administracion');
		return parent::init();
	}

	public function	run() {
		$this->render('admin');
		return parent::run();
	}

}
?>