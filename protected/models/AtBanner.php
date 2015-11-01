<?php

/**
 * This is the model class for table "at_banner".
 *
 * The followings are the available columns in table 'at_banner':
 * @property integer $id
 * @property string $banner_title
 * @property string $banner_description
 * @property string $banner_link
 * @property integer $banner_order
 * @property string $status
 * @property string $added
 * @property string $modified
 */
class AtBanner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('banner_order', 'numerical', 'integerOnly'=>true),
			array('banner_title', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('banner_description, banner_link, added, modified', 'safe'),
                    array('modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'update'),
                   array('added,modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, banner_title, banner_description, banner_link, banner_order, status, added, modified', 'safe', 'on'=>'search'),
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
			'banner_title' => 'Banner Title',
			'banner_description' => 'Banner Description',
			'banner_link' => 'Banner Link',
			'banner_order' => 'Banner Order',
			'status' => 'Status',
			'added' => 'Added',
			'modified' => 'Modified',
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
		$criteria->compare('banner_title',$this->banner_title,true);
		$criteria->compare('banner_description',$this->banner_description,true);
		$criteria->compare('banner_link',$this->banner_link,true);
		$criteria->compare('banner_order',$this->banner_order);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('added',$this->added,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AtBanner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
