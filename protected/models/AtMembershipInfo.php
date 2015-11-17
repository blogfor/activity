<?php

/**
 * This is the model class for table "at_membership_info".
 *
 * The followings are the available columns in table 'at_membership_info':
 * @property string $id
 * @property string $payment_c_date
 * @property string $todate
 * @property string $fromdate
 * @property string $membership_title
 * @property integer $user_id
 * @property string $membership_note
 */
class AtMembershipInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_membership_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('payment_c_date, todate, fromdate, membership_title, user_id, membership_note', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('membership_title', 'length', 'max'=>100),
			array('membership_note', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, payment_c_date, todate, fromdate, membership_title, user_id, membership_note', 'safe', 'on'=>'search'),
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
			'payment_c_date' => 'Payment C Date',
			'todate' => 'Todate',
			'fromdate' => 'Fromdate',
			'membership_title' => 'Membership Title',
			'user_id' => 'User',
			'membership_note' => 'Membership Note',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('payment_c_date',$this->payment_c_date,true);
		$criteria->compare('todate',$this->todate,true);
		$criteria->compare('fromdate',$this->fromdate,true);
		$criteria->compare('membership_title',$this->membership_title,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('membership_note',$this->membership_note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtMembershipInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
