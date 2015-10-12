<?php

/**
 * This is the model class for table "mr_class".
 *
 * The followings are the available columns in table 'mr_class':
 * @property integer $id
 * @property integer $course_id
 * @property string $class_details
 * @property string $schedule
 * @property string $start_date
 * @property string $end_date
 * @property integer $capacity
 * @property string $status
 */
class MrClass extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mr_class';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id, start_date, end_date, status', 'required'),
			array('course_id, capacity', 'numerical', 'integerOnly'=>true),
			array('schedule', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('class_details', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, course_id, class_details, schedule, start_date, end_date, capacity, status', 'safe', 'on'=>'search'),
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
			'id' => 'Class ID',
			'course_id' => 'Course',
			'class_details' => 'Class Details',
			'schedule' => 'Class Schedule',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'capacity' => 'Class Capacity',
			'status' => 'Status',
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
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('class_details',$this->class_details,true);
		$criteria->compare('schedule',$this->schedule,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('capacity',$this->capacity);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MrClass the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
         
          
	public function getStatusText($var)
	{  
		$sql = "SELECT * from mr_class";
		$data = Yii::app()->db
		->createCommand($sql)
		->queryAll();
		print_r( $data);
		// print_r($var);
		return NULL;
	}
        
        
}
