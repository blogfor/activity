<?php

/**
 * This is the model class for table "at_activity".
 *
 * The followings are the available columns in table 'at_activity':
 * @property integer $id
 * @property string $activity_name
 * @property string $activity_description
 * @property string $activity_image
 * @property string $created
 * @property string $modified
 */
class AtActivity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'at_activity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activity_name, activity_image', 'length', 'max'=>255),
			array('activity_description, created, modified', 'safe'),
                            array('modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'update'),
                   array('created,modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'insert'),
                   
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, activity_name, activity_description, activity_image, created, modified', 'safe', 'on'=>'search'),
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
			'activity_name' => 'Activity Name',
			'activity_description' => 'Activity Description',
			'activity_image' => 'Activity Image',
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
		$criteria->compare('activity_name',$this->activity_name,true);
		$criteria->compare('activity_description',$this->activity_description,true);
		$criteria->compare('activity_image',$this->activity_image,true);
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
	 * @return AtActivity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
