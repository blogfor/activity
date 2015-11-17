<?php

/**
 * This is the model class for table "at_partner_activity".
 *
 * The followings are the available columns in table 'at_partner_activity':
 * @property integer $id
 * @property integer $user_id
 * @property integer $activity_type_id
 * @property string $age_range
 * @property string $activity_date
 * @property string $activity_time
 * @property string $is_paid
 * @property double $price
 * @property double $address
 * @property string $created
 * @property integer $createdby
 * @property integer $modifiedby
 */
class AtPartnerActivity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_partner_activity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created', 'required'),
			array('user_id, activity_type_id, createdby, modifiedby', 'numerical', 'integerOnly'=>true),
			array('price, address', 'numerical'),
			array('age_range, activity_time', 'length', 'max'=>50),
			array('is_paid', 'length', 'max'=>1),
			array('activity_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, activity_type_id, age_range, activity_date, activity_time, is_paid, price, address, created, createdby, modifiedby', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'activity_type_id' => 'Activity Type',
			'age_range' => 'Age Range',
			'activity_date' => 'Activity Date',
			'activity_time' => 'Activity Time',
			'is_paid' => 'Is Paid',
			'price' => 'Price',
			'address' => 'Address',
			'created' => 'Create At',
			'createdby' => 'Created By',
			'modifiedby' => 'Modified By',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('activity_type_id',$this->activity_type_id);
		$criteria->compare('age_range',$this->age_range,true);
		$criteria->compare('activity_date',$this->activity_date,true);
		$criteria->compare('activity_time',$this->activity_time,true);
		$criteria->compare('is_paid',$this->is_paid,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('address',$this->address);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('createdby',$this->createdby);
		$criteria->compare('modifiedby',$this->modifiedby);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtPartnerActivity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
