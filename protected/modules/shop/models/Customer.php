<?php

class Customer extends CActiveRecord
{
	public $terms_accepted = null;
	public $password;
	public $password_repeat;
	public $address_firstname;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return Yii::app()->getModule('shop')->customerTable;
	}

	public function rules()
	{
		return array(
			array('email, username', 'required'),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>32),
			array('password', 'compare' ),
			array('password_repeat', 'safe'),
			array('address_id, customer_id', 'numerical', 'integerOnly'=>true),
			array('email', 'CEmailValidator'),
			array('customer_id, email, username', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'Orders' => array(self::HAS_MANY, 'Order', 'customer_id'),
			'ShoppingCarts' => array(self::HAS_MANY, 'ShoppingCart', 'customer_id'),
			'address' => array(self::BELONGS_TO, 'Address', 'address_id'),
			'billingAddress' => array(self::BELONGS_TO, 'BillingAddress', 'billing_address_id'),
			'deliveryAddress' => array(self::BELONGS_TO, 'DeliveryAddress', 'delivery_address_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'customer_id' => Yii::t('ShopModule.shop', 'Customer'),
			'user_id' => Yii::t('ShopModule.shop', 'Userid'),
			'address_id' => Yii::t('ShopModule.shop', 'Address'),
			'billing_address_id' => Yii::t('ShopModule.shop', 'Billing Address'),
			'delivery_address_id' => Yii::t('ShopModule.shop', 'Delivery Address'),
			'email' => Yii::t('ShopModule.shop', 'Email'),
			'username' => Yii::t('ShopModule.shop', 'Username'),
			'password' => Yii::t('ShopModule.shop', 'Password'),
			'password_repeat' => Yii::t('ShopModule.shop', 'Password repeat'),

		);
	}

	public function hash($value)
	{
		return crypt($value);
	}

	protected function beforesave()
	{
		if(parent::beforesave()){
			$this->pwd_hash = $this->hash($this->password);
			return true;
		}
		return false;
	}

	public function check($value){

		$new_hash=crypt($value, $this->pwd_hash);
		if($new_hash == $this->pwd_hash){
			return true;
		}
		return false;
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('customer_id',$this->customer_id);

		$criteria->compare('user_id',$this->user_id);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('username',$this->username);

		$criteria->compare('address.firstname',$this->address_firstname,true);

		$sort = new CSort;
		$sort->attributes = array(
			'address_firstname' => array(
				'asc'=>'address.firstname',
				'desc'=>'address.firstname DESC',
				),'*',
			);

		return new CActiveDataProvider('Customer', array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}
}
