<?php

/**
 * This is the model class for table "at_pages".
 *
 * The followings are the available columns in table 'at_pages':
 * @property integer $id
 * @property string $page_name
 * @property string $page_description
 * @property string $created
 * @property string $modified
 */
class AtPages extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'at_pages';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('page_name', 'length', 'max' => 255),
            array('page_name,page_description', 'required'),
            array('page_description, created, modified , page_slug', 'safe'),
            array('modified', 'default',
                'value' => date("Y-m-d H:i:s"),
                'setOnEmpty' => false, 'on' => 'update'),
            array('created,modified', 'default',
                'value' => date("Y-m-d H:i:s"),
                'setOnEmpty' => false, 'on' => 'insert'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, page_name, page_description,page_slug, created, modified', 'safe', 'on' => 'search'),
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
            'page_name' => 'Page Name',
            'page_description' => 'Page Description',
            'page_slug' => 'Page Slug',
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
        $criteria->compare('page_name', $this->page_name, true);
        $criteria->compare('page_description', $this->page_description, true);
        $criteria->compare('page_slug', $this->page_slug, true);
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
     * @return AtPages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
