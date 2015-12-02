<?php

/**
 * This is the model class for table "mr_students".
 *
 * The followings are the available columns in table 'mr_students':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $dob
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $email
 * @property string $mobile
 * @property string $CDCNO
 * @property string $INDOSNO
 * @property string $passportno
 * @property string $passport_issue_from
 * @property string $certificate
 * @property integer $routeofentry
 * @property string $status
 * @property string $created
 * @property string $modified
 */
class MrStudents extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mr_students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    array('firstname, lastname,email,CDCNO', 'required'),
			array('routeofentry', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, city, state, zip, email,passport_issue_from', 'length', 'max'=>255),
			array('mobile, CDCNO, INDOSNO, passportno', 'length', 'max'=>50),
			array('status', 'length', 'max'=>1),
			array('dob, address, certificate, created, modified', 'safe'),
                     // Set the created and modified dates automatically on insert.
                    array('created, modified', 'default', 
                          'value'=>new CDbExpression('NOW()'),
                          'setOnEmpty'=>false, 'on'=>'insert'),

                    // Update the modified date on update.
                    array('modified', 'default', 
                          'value'=>new CDbExpression('NOW()'),
                          'setOnEmpty'=>false, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstname, lastname, dob, address, city, state, zip, email, mobile, CDCNO, INDOSNO, passportno,passport_issue_from, certificate, routeofentry, status, created, modified', 'safe', 'on'=>'search'),
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
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'dob' => 'Date of Birth',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'email' => 'Email',
			'mobile' => 'Mobile No',
			'CDCNO' => 'C.D.C. No.',
			'INDOSNO' => 'INDOS No.',
			'passportno' => 'Passport No.',
                        'passport_issue_from'=>'Passport Issued From',
			'certificate' => 'Certificate Held',
			'routeofentry' => 'Route of Entry',
			'status' => 'Status',
			'created' => 'Created At',
			'modified' => 'Modified At',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('CDCNO',$this->CDCNO,true);
		$criteria->compare('INDOSNO',$this->INDOSNO,true);
		$criteria->compare('passportno',$this->passportno,true);
                $criteria->compare('passport_issue_from',$this->passport_issue_from,true);
		$criteria->compare('certificate',$this->certificate,true);
		$criteria->compare('routeofentry',$this->routeofentry);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MrStudents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
