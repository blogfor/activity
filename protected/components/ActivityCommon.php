<?php

class ActivityCommon extends CApplicationComponent {

    public static function get_setting_info() {


        //Get Course Global settings 
###------------------------------------------------------####
        $SqlSetting = " SELECT * FROM at_site_settings";
        $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
###------------------------------------------------------####
        $returnValue = $ArraySettingResult[0];
        return $returnValue;
    }

    /*
     * For Common Mail send
     * Parameter : 
     * $emails - array() - array of emails where to be send
     * $mailContentID- content id - to extract actual emails to be send
     * $CompleteMsg - Complete message after addinf mail data
     * 
     */

     public static function atMailSend($emails, $mailContentID, $CompleteMsg, $mailData, $isAdmin = false) {
        //Include external emails
        $includeExtMails = Yii::app()->db->createCommand("SELECT * FROM at_mail_content WHERE id=" . $mailContentID)->queryRow();
        //var_dump($includeExtMails); 
        if ($includeExtMails['notification_on'] == 'Yes') {

            //var_dump($emails,$mailContentID,$CompleteMsg,$mailData); 
            //Final Emails array
            $finalEmailsArray = array();


            //Exclude Emails array
            $excludeEmailsArray = array();



//get include groups 
            $arrayGroupcheck = array();


            $sendAdmin = $includeExtMails['send_admin'];
            $includeExtMails = explode(',', $includeExtMails['include_external_emails']);

            $finalExternalEmails = array();
            foreach ($includeExtMails as $iEm) {
                $finalExternalEmails[] = trim($iEm);
            }

            //Merge two arrays of include groups and external emails 
            $finalEmailsArray = array_merge($finalExternalEmails, $finalEmailsArray);




            //Merge two arrays of mails to be send and merged arrays
            $finalEmailsArray=array_merge($emails,$finalEmailsArray);     
            //Making final email arrays
            $finalEmailsArray = array_diff($finalEmailsArray, $excludeEmailsArray);

            $finalEmailsArray = array_filter($finalEmailsArray);



            $SqlSetting = " SELECT * FROM at_site_settings WHERE id=1";
            $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
            ###------------------------------------------------------####
            Yii::app()->params['siteSettingsConfig'] = $ArraySettingResult[0];

//            Yii::import('application.extensions.phpmailer.JPhpMailer');
//            $mail = new JPhpMailer;
//            $mail->IsSMTP(); // telling the class to use SMTP
//            $mail->SMTPDebug = false;
//            $mail->SMTPSecure = "tls";
//            $mail->SetFrom(Yii::app()->params['siteSettingsConfig']['site_email'], Yii::app()->params['siteSettingsConfig']['site_email']);
//            $mail->ClearReplyTos();
//            $mail->addReplyTo(Yii::app()->params['siteSettingsConfig']['site_email'], Yii::app()->params['siteSettingsConfig']['site_email']);
//            $mail->Subject = stripJunk($mailData['subject']);
//            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
//            $mail->MsgHTML($CompleteMsg);

            if (count($finalEmailsArray) > 0) {

                foreach ($finalEmailsArray as $email) {
                    if (trim($email) != '')
                    {   //$mail->AddAddress(trim($email));
                        
                $subject='=?UTF-8?B?'.base64_encode($mailData['subject']).'?=';
                $headers="From: ".Yii::app()->params['siteSettingsConfig']['site_email']." <".Yii::app()->params['siteSettingsConfig']['site_email'].">\r\n".
                        "Reply-To: ".Yii::app()->params['siteSettingsConfig']['site_email']."\r\n".
                        "MIME-Version: 1.0\r\n".
                        "Content-Type: text/plain; charset=UTF-8";


                mail($email,$mailData['subject'],$CompleteMsg,$headers);
                    }
                    
                }
            }
            

//            $mail->Send();
        }//if
    }

}