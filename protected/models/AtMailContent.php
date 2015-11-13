<?php

/**
 * This is the model class for table "at_mail_content".
 *
 * The followings are the available columns in table 'at_mail_content':
 * @property integer $id
 * @property string $module_name
 * @property string $mail_subject
 * @property string $mail_content
 * @property string $cdate
 * @property string $mail_footer
 * @property string $mail_exclude
 * @property string $mail_include
 * @property string $instant
 * @property string $include_external_emails
 * @property string $notification_on
 * @property string $send_admin
 */
class AtMailContent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_mail_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_name, mail_subject, mail_content, cdate, mail_footer, notification_on', 'required'),
			array('module_name, mail_subject, mail_footer', 'length', 'max'=>255),
			array('instant', 'length', 'max'=>1),
			array('notification_on, send_admin', 'length', 'max'=>3),
			array('mail_exclude, mail_include, include_external_emails', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_name, mail_subject, mail_content, cdate, mail_footer, mail_exclude, mail_include, instant, include_external_emails, notification_on, send_admin', 'safe', 'on'=>'search'),
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
			'module_name' => 'Module Name',
			'mail_subject' => 'Mail Subject',
			'mail_content' => 'Mail Content',
			'cdate' => 'Cdate',
			'mail_footer' => 'Mail Footer',
			'mail_exclude' => 'Mail Exclude',
			'mail_include' => 'Mail Include',
			'instant' => 'Instant',
			'include_external_emails' => 'Include External Emails',
			'notification_on' => 'Notification On',
			'send_admin' => 'Send Admin',
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
		$criteria->compare('module_name',$this->module_name,true);
		$criteria->compare('mail_subject',$this->mail_subject,true);
		$criteria->compare('mail_content',$this->mail_content,true);
		$criteria->compare('cdate',$this->cdate,true);
		$criteria->compare('mail_footer',$this->mail_footer,true);
		$criteria->compare('mail_exclude',$this->mail_exclude,true);
		$criteria->compare('mail_include',$this->mail_include,true);
		$criteria->compare('instant',$this->instant,true);
		$criteria->compare('include_external_emails',$this->include_external_emails,true);
		$criteria->compare('notification_on',$this->notification_on,true);
		$criteria->compare('send_admin',$this->send_admin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtMailContent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        /********** Function to Return the All mailing Data *************/
	function fetchMailContent($id,$isAdmin='1')
	{
		$sql = "SELECT a.* FROM at_mail_content a
				WHERE a.id=".$id;
			
		$EmailData = Yii::app()->db->createCommand($sql)->queryAll();		
		$emailArray = array();		
		if(!empty($EmailData))
		{
			$emailArray['subject'] 	= $EmailData[0]['mail_subject'];
			$emailArray['body']		= $EmailData[0]['mail_content'];
			$emailArray['footer']	= $EmailData[0]['mail_footer'];	
                        $emailArray['notification_on'] 	= $EmailData[0]['notification_on'];
		
		}
		return $emailArray;
	}	
	/********** End of function **************************/
}
