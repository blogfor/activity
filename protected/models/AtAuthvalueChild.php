<?php

/**
 * This is the model class for table "at_authvalue_child".
 *
 * The followings are the available columns in table 'at_authvalue_child':
 * @property integer $id
 * @property string $name
 * @property double $value
 * @property integer $classes
 * @property string $membership_desc
 * @property integer $number_of_reg
 * @property string $is_active
 * @property integer $membership_duration
 */
class AtAuthvalueChild extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_authvalue_child';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, value, classes, membership_desc, number_of_reg', 'required'),
			array('classes, number_of_reg, membership_duration', 'numerical', 'integerOnly'=>true),
			array('value', 'numerical'),
			array('name', 'length', 'max'=>80),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, value, classes, membership_desc, number_of_reg, is_active, membership_duration', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'value' => 'Value',
			'classes' => 'Classes',
			'membership_desc' => 'Membership Description',
			'number_of_reg' => 'Number Of Reg',
			'is_active' => 'Is Active',
			'membership_duration' => 'Monthly',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('value',$this->value);
		$criteria->compare('classes',$this->classes);
		$criteria->compare('membership_desc',$this->membership_desc,true);
		$criteria->compare('number_of_reg',$this->number_of_reg);
		$criteria->compare('is_active',$this->is_active,true);
		$criteria->compare('membership_duration',$this->membership_duration);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtAuthvalueChild the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
