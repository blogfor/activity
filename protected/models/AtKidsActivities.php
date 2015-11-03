<?php

/**
 * This is the model class for table "at_kids_activities".
 *
 * The followings are the available columns in table 'at_kids_activities':
 * @property integer $id
 * @property string $kids_name
 * @property string $kids_description
 * @property string $kids_image
 * @property string $created
 * @property string $modified
 */
class AtKidsActivities extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'at_kids_activities';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('kids_name, kids_image', 'length', 'max' => 255),
            array('kids_description, created, modified', 'safe'),
            array('kids_name, kids_image,kids_description', 'required'),
            array('hwt_image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
             array('modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'update'),
                   array('created,modified','default',
                      'value'=>date("Y-m-d H:i:s"),
                      'setOnEmpty'=>false,'on'=>'insert'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, kids_name, kids_description, kids_image, created, modified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'kids_name' => 'Title',
            'kids_description' => 'Description',
            'kids_image' => 'Image',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('kids_name', $this->kids_name, true);
        $criteria->compare('kids_description', $this->kids_description, true);
        $criteria->compare('kids_image', $this->kids_image, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('modified', $this->modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return AtKidsActivities the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
