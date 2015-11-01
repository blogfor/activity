<?php
class ActivitySettings extends CApplicationComponent {
 /*
  * Get Site Settings
  */ 
 public function get_site_setting_info() {                     
         //Get Course Global settings 
	###------------------------------------------------------####
	 $SqlSetting = " SELECT * FROM at_site_settings WHERE id=1";
	 $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
	###------------------------------------------------------####
    Yii::app()->params['siteSettingsConfig'] =$ArraySettingResult[0];     
 }
}