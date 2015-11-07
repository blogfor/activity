<?php
class jqueryDateTime extends CInputWidget {

    public $attribute;
    public $name;
    public $value;
    public $htmlOptions;
    public $options;
	
        
    public function init() {
       /* if (!isset($this->options['allowTimes'])) {
            $this->options['allowTimes'] = array();
            for ($i = 0; $i < 24; $i++) {
				if($i<10) $hour="0".$i;
				else $hour=$i;
                //$hour = str_pad($i, 2, 0, STR_PAD_LEFT);
                //$minutes = str_pad($i, 2, 0, STR_PAD_LEFT);
                $this->options['allowTimes'][] = $hour.':00';
                //$this->options['allowTimes'][] = $hour.':30';
            }
        }*/
		/*echo "<pre>";
		print_r($this->options);*/
        return parent::init();
    }
	
    
    function run() {
        list($name, $id) = $this->resolveNameID();
        
        if (isset($this->htmlOptions['id']))
            $id = $this->htmlOptions['id'];
        else
            $this->htmlOptions['id'] = $id;
			
        if (isset($this->htmlOptions['name']))
            $name = $this->htmlOptions['name'];
        else
            $this->htmlOptions['name'] = $name;
       
        if ($this->hasModel())
		{
			if(isset($this->options['format']) && $this->options['format']!="")
			{
				$m=$this->model;
				$a=$this->attribute;
				if($m->$a!='')
					$m->$a=date($this->options['format'],strtotime($m->$a));
			}
			//print_r($this->options);
            echo CHtml::activeTextField($this->model, $this->attribute, $this->htmlOptions);
		}
        else
		{
			//print_r($this->options);
			if(isset($this->options['format']) && $this->options['format']!="")
			{	
				if($this->value!='')			
				$this->value=date($this->options['format'],strtotime($this->value));
			}
            echo CHtml::textField($this->name, $this->value, $this->htmlOptions);
		}
        
        if (isset($this->htmlOptions['id']))
            $id = $this->htmlOptions['id'];
        else
            $this->htmlOptions['id'] = $id;

        $options = CJavaScript::encode($this->options);
        $cs = Yii::app()->getClientScript();

        $assetUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.YiiDateTimePicker.assets'));
        Yii::app()->clientScript->registerScriptFile($assetUrl . '/jquery.datetimepicker.js');
        Yii::app()->clientScript->registerCssFile($assetUrl . '/jquery.datetimepicker.css');

        $js = "$('#{$id}').datetimepicker($options);";
        
        $cs->registerScript(__CLASS__ . '#' . $id, $js);
    }
}
?>
