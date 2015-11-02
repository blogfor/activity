<?php

/**
 * This is the model class for table "at_site_settings".
 *
 * The followings are the available columns in table 'at_site_settings':
 * @property integer $id
 * @property string $site_address
 * @property string $site_phone
 * @property string $site_email
 * @property string $site_fb
 * @property string $site_gplus
 * @property string $site_twitter
 * @property string $site_paypal_business_email
 * @property string $site_paypal_secrect
 * @property string $site_paypal_authid
 */
class AtSiteSettings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_site_settings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_phone', 'length', 'max'=>15),
			array('site_email, site_fb, site_gplus, site_twitter, site_paypal_business_email, site_paypal_secrect, site_paypal_authid', 'length', 'max'=>255),
			array('site_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, site_address, site_phone, site_email, site_fb, site_gplus, site_twitter, site_paypal_business_email, site_paypal_secrect, site_paypal_authid', 'safe', 'on'=>'search'),
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
			'site_address' => 'Site Address',
			'site_phone' => 'Site Phone',
			'site_email' => 'Site Email',
			'site_fb' => 'Site Fb',
			'site_gplus' => 'Site Gplus',
			'site_twitter' => 'Site Twitter',
			'site_paypal_business_email' => 'Site Paypal Business Email',
			'site_paypal_secrect' => 'Site Paypal Secrect',
			'site_paypal_authid' => 'Site Paypal Authid',
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
		$criteria->compare('site_address',$this->site_address,true);
		$criteria->compare('site_phone',$this->site_phone,true);
		$criteria->compare('site_email',$this->site_email,true);
		$criteria->compare('site_fb',$this->site_fb,true);
		$criteria->compare('site_gplus',$this->site_gplus,true);
		$criteria->compare('site_twitter',$this->site_twitter,true);
		$criteria->compare('site_paypal_business_email',$this->site_paypal_business_email,true);
		$criteria->compare('site_paypal_secrect',$this->site_paypal_secrect,true);
		$criteria->compare('site_paypal_authid',$this->site_paypal_authid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtSiteSettings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}