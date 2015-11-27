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
 * @property string $paypal_pro_user_name
 * @property string $paypal_pro_password
 * @property string $paypal_pro_api_signature
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
			array('site_email, site_fb, site_gplus, site_twitter, paypal_pro_user_name, paypal_pro_password, paypal_pro_api_signature,site_partner_inquiry_email,site_registration_email', 'length', 'max'=>255),
			array('site_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, site_address, site_phone, site_email, site_fb, site_gplus, site_twitter, paypal_pro_user_name, paypal_pro_password, paypal_pro_api_signature,site_email_from,site_partner_inquiry_email,site_registration_email', 'safe', 'on'=>'search'),
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
                        'site_email_from'=>'Site Email From',
			'site_fb' => 'Site Fb',
			'site_gplus' => 'Site Gplus',
			'site_twitter' => 'Site Twitter',
			'paypal_pro_user_name' => 'Paypal API User Name',
			'paypal_pro_password' => 'Paypal API Password',
			'paypal_pro_api_signature' => 'Paypal API Signature',
                        'site_partner_inquiry_email'=>'Partner Inquiry Email',
                        'site_registration_email'=>'Registration Email'
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
		$criteria->compare('paypal_pro_user_name',$this->paypal_pro_user_name,true);
		$criteria->compare('paypal_pro_password',$this->paypal_pro_password,true);
		$criteria->compare('paypal_pro_api_signature',$this->paypal_pro_api_signature,true);
                $criteria->compare('site_email_from',$this->site_email_from,true);
                $criteria->compare('site_registration_email',$this->site_registration_email,true);
                 $criteria->compare('site_partner_inquiry_email',$this->site_partner_inquiry_email,true);
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
