<?php

/**
 * This is the model class for table "shop_order".
 *
 * The followings are the available columns in table 'shop_order':
 * @property integer $order_id
 * @property integer $customer_id
 * @property integer $delivery_address_id
 * @property integer $billing_address_id
 * @property integer $ordering_date
 * @property integer $ordering_done
 * @property integer $ordering_confirmed
 * @property integer $payment_method
 * @property integer $shipping_method
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property ShopCustomer $customer
 */
class ShopOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'shop_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, delivery_address_id, billing_address_id, ordering_date, payment_method, shipping_method', 'required'),
			array('customer_id, delivery_address_id, billing_address_id, ordering_date, ordering_done, ordering_confirmed, payment_method, shipping_method', 'numerical', 'integerOnly'=>true),
			array('comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_id, customer_id, delivery_address_id, billing_address_id, ordering_date, ordering_done, ordering_confirmed, payment_method, shipping_method, comment', 'safe', 'on'=>'search'),
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
			'customer' => array(self::BELONGS_TO, 'ShopCustomer', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'order_id' => 'Order',
			'customer_id' => 'Customer',
			'delivery_address_id' => 'Delivery Address',
			'billing_address_id' => 'Billing Address',
			'ordering_date' => 'Ordering Date',
			'ordering_done' => 'Ordering Done',
			'ordering_confirmed' => 'Ordering Confirmed',
			'payment_method' => 'Payment Method',
			'shipping_method' => 'Shipping Method',
			'comment' => 'Comment',
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

		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('delivery_address_id',$this->delivery_address_id);
		$criteria->compare('billing_address_id',$this->billing_address_id);
		$criteria->compare('ordering_date',$this->ordering_date);
		$criteria->compare('ordering_done',$this->ordering_done);
		$criteria->compare('ordering_confirmed',$this->ordering_confirmed);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('shipping_method',$this->shipping_method);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ShopOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
