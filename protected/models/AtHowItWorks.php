<?php

/**
 * This is the model class for table "at_how_it_works".
 *
 * The followings are the available columns in table 'at_how_it_works':
 * @property integer $id
 * @property string $hwt_name
 * @property string $hwt_description
 * @property string $hwt_image
 * @property string $created
 * @property string $modified
 */
class AtHowItWorks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_how_it_works';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hwt_name, hwt_image', 'length', 'max'=>255),
			array('hwt_description, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hwt_name, hwt_description, hwt_image, created, modified', 'safe', 'on'=>'search'),
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
			'hwt_name' => 'Hwt Name',
			'hwt_description' => 'Hwt Description',
			'hwt_image' => 'Hwt Image',
			'created' => 'Created',
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
		$criteria->compare('hwt_name',$this->hwt_name,true);
		$criteria->compare('hwt_description',$this->hwt_description,true);
		$criteria->compare('hwt_image',$this->hwt_image,true);
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
	 * @return AtHowItWorks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
