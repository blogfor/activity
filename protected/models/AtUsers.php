<?php

/**
 * This is the model class for table "mr_users".
 *
 * The followings are the available columns in table 'mr_users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $address1
 * @property string $sex
 * @property string $office_phone
 * @property string $home_phone
 * @property integer $zipcode
 * @property string $create_at
 * @property string $lastvisit_at
 * @property integer $superuser
 * @property integer $status
 * @property integer $createdby
 * @property integer $modifiedby
 */
class AtUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, address1, zipcode, create_at', 'required'),
			array('zipcode, superuser, status, createdby, modifiedby', 'numerical', 'integerOnly'=>true),
			array('username, email, firstname, lastname', 'length', 'max'=>256),
			array('password', 'length', 'max'=>128),
			array('sex', 'length', 'max'=>1),
			array('office_phone, home_phone', 'length', 'max'=>100),
			array('lastvisit_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, firstname, lastname, address1, sex, office_phone, home_phone, zipcode, create_at, lastvisit_at, superuser, status, createdby, modifiedby', 'safe', 'on'=>'search'),
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
			'username' => 'User Name',
			'password' => 'Password',
			'email' => 'Email',
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'address1' => 'Address',
			'sex' => 'Sex',
			'office_phone' => 'Office Phone',
			'home_phone' => 'Home Phone',
			'zipcode' => 'Zip Code',
			'create_at' => 'Create At',
			'lastvisit_at' => 'Last Visit At',
			'superuser' => 'Super User',
			'status' => 'Status',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('office_phone',$this->office_phone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('zipcode',$this->zipcode);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
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
	 * @return MrUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
