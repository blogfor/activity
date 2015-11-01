<?php

/**
 * This is the model class for table "at_payment".
 *
 * The followings are the available columns in table 'at_payment':
 * @property integer $id
 * @property string $cdate
 * @property integer $membership_id
 * @property double $final_amount
 * @property integer $payment_process
 * @property string $payment_status
 * @property string $Payment_method_detail
 * @property integer $payment_by
 * @property string $bank_name
 * @property string $check_no
 * @property string $pay_by_fname
 * @property string $pay_by_lname
 * @property string $pay_by_address
 * @property string $pay_by_phone
 * @property string $pay_by_mobile
 * @property string $pay_by_fax
 * @property string $pay_by_email
 * @property string $pay_note
 * @property string $refund
 * @property string $refund_note
 * @property integer $refund_by
 * @property string $refund_time
 * @property string $response_text
 * @property string $online_pay_mode
 */
class AtPayment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cdate, membership_id, final_amount, payment_process, payment_status, Payment_method_detail, payment_by, bank_name, check_no, pay_by_fname, pay_by_lname, pay_by_address, pay_by_phone, pay_by_mobile, pay_by_fax, pay_by_email, pay_note, refund, refund_note, refund_by, refund_time', 'required'),
			array('membership_id, payment_process, payment_by, refund_by', 'numerical', 'integerOnly'=>true),
			array('final_amount', 'numerical'),
			array('payment_status', 'length', 'max'=>12),
			array('Payment_method_detail, bank_name, check_no, pay_by_fname, pay_by_lname, pay_by_address, pay_note, refund_note', 'length', 'max'=>255),
			array('pay_by_phone, pay_by_mobile, pay_by_fax', 'length', 'max'=>20),
			array('pay_by_email', 'length', 'max'=>100),
			array('refund', 'length', 'max'=>11),
			array('online_pay_mode', 'length', 'max'=>9),
			array('response_text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cdate, membership_id, final_amount, payment_process, payment_status, Payment_method_detail, payment_by, bank_name, check_no, pay_by_fname, pay_by_lname, pay_by_address, pay_by_phone, pay_by_mobile, pay_by_fax, pay_by_email, pay_note, refund, refund_note, refund_by, refund_time, response_text, online_pay_mode', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cdate' => 'Cdate',
			'membership_id' => 'Membership',
			'final_amount' => 'Final Amount',
			'payment_process' => 'Payment Process',
			'payment_status' => 'Payment Status',
			'Payment_method_detail' => 'Payment Method Detail',
			'payment_by' => 'Payment By',
			'bank_name' => 'Bank Name',
			'check_no' => 'Check No',
			'pay_by_fname' => 'Pay By Fname',
			'pay_by_lname' => 'Pay By Lname',
			'pay_by_address' => 'Pay By Address',
			'pay_by_phone' => 'Pay By Phone',
			'pay_by_mobile' => 'Pay By Mobile',
			'pay_by_fax' => 'Pay By Fax',
			'pay_by_email' => 'Pay By Email',
			'pay_note' => 'Pay Note',
			'refund' => 'Refund',
			'refund_note' => 'Refund Note',
			'refund_by' => 'Refund By',
			'refund_time' => 'Refund Time',
			'response_text' => 'Response Text',
			'online_pay_mode' => 'Online Pay Mode',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('cdate',$this->cdate,true);
		$criteria->compare('membership_id',$this->membership_id);
		$criteria->compare('final_amount',$this->final_amount);
		$criteria->compare('payment_process',$this->payment_process);
		$criteria->compare('payment_status',$this->payment_status,true);
		$criteria->compare('Payment_method_detail',$this->Payment_method_detail,true);
		$criteria->compare('payment_by',$this->payment_by);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('check_no',$this->check_no,true);
		$criteria->compare('pay_by_fname',$this->pay_by_fname,true);
		$criteria->compare('pay_by_lname',$this->pay_by_lname,true);
		$criteria->compare('pay_by_address',$this->pay_by_address,true);
		$criteria->compare('pay_by_phone',$this->pay_by_phone,true);
		$criteria->compare('pay_by_mobile',$this->pay_by_mobile,true);
		$criteria->compare('pay_by_fax',$this->pay_by_fax,true);
		$criteria->compare('pay_by_email',$this->pay_by_email,true);
		$criteria->compare('pay_note',$this->pay_note,true);
		$criteria->compare('refund',$this->refund,true);
		$criteria->compare('refund_note',$this->refund_note,true);
		$criteria->compare('refund_by',$this->refund_by);
		$criteria->compare('refund_time',$this->refund_time,true);
		$criteria->compare('response_text',$this->response_text,true);
		$criteria->compare('online_pay_mode',$this->online_pay_mode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtPayment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
