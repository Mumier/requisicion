<?php

/**
 * This is the model class for table "shop_customer".
 *
 * The followings are the available columns in table 'shop_customer':
 * @property integer $customer_id
 * @property integer $user_id
 * @property integer $address_id
 * @property integer $delivery_address_id
 * @property integer $billing_address_id
 * @property string $email
 * @property string $username
 * @property string $pwd_hash
 *
 * The followings are the available model relations:
 * @property ShopOrder[] $shopOrders
 */
class ShopCustomer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $password;
	public $password_repeat;


	public function tableName()
	{
		return 'shop_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username', 'required'),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>32),
			array('password', 'compare' ),
			array('password_repeat', 'safe'),
			array('user_id, address_id, delivery_address_id, billing_address_id', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>45),
			array('email', 'CEmailValidator'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customer_id, user_id, address_id, delivery_address_id, billing_address_id, email, username, pwd_hash', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'shopOrders' => array(self::HAS_MANY, 'ShopOrder', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'customer_id' => 'Customer',
			'user_id' => 'User',
			'address_id' => 'Address',
			'delivery_address_id' => 'Delivery Address',
			'billing_address_id' => 'Billing Address',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'password_repeat' => 'Password Repeat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('delivery_address_id',$this->delivery_address_id);
		$criteria->compare('billing_address_id',$this->billing_address_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('pwd_hash',$this->pwd_hash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ShopCustomer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
