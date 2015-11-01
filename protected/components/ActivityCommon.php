<?php
class ActivityCommon extends CApplicationComponent {
 public static function get_setting_info() {
             
        
         //Get Course Global settings 
        
###------------------------------------------------------####
$SqlSetting = " SELECT * FROM at_site_settings";
 $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
###------------------------------------------------------####
 $returnValue=$ArraySettingResult[0];
//        if($ArraySettingResult[0]['course_limit_on'])
//            $COURSE_LIMIT_ON=$ArraySettingResult[0]['course_limit_on'];
//        
//        if($ArraySettingResult[0]['course_wait_list_auto'])
//            $COURSE_WAIT_LIST_AUTO=$ArraySettingResult[0]['course_wait_list_auto'];
        
        
 
     return $returnValue;
 }
 
 /*
  * Get Basic Settings
  */
 
 public static function get_basic_setting_info() {
             
        
         //Get Course Global settings 
        
###------------------------------------------------------####
$SqlSetting = " SELECT marker FROM peg_basic_settings WHERE active=1";
 $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
###------------------------------------------------------####
 $returnValue=array();
 
        foreach ($ArraySettingResult as $asr)
        {
            $returnValue[]=$asr['marker'];
        }
        
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
    
 function cmMailSend($emails,$mailContentID,$CompleteMsg,$mailData,$isAdmin=false)
 {
     //Include external emails
$includeExtMails=Yii::app()->db->createCommand("SELECT * FROM peg_mail_content WHERE id=".$mailContentID)->queryRow();
     //var_dump($includeExtMails); 
if($includeExtMails['notification_on']=='Yes') {
     
     //var_dump($emails,$mailContentID,$CompleteMsg,$mailData); 
     //Final Emails array
     $finalEmailsArray=array();
     
     
     //Exclude Emails array
     $excludeEmailsArray=array();
     
     //get exclude staff
$queryStaff = "SELECT a.email,a.username,a.id,b.firstname,b.lastname FROM peg_mail_exclude_users as pmeu INNER JOIN peg_users as a ON a.id=pmeu.exclude_user INNER JOIN peg_profiles b ON a.id=b.user_id WHERE pmeu.user_type = 'Staff' AND  pmeu.mail_content_id='".$mailContentID."'";
                $resultArrayStaffs = Yii::app()->db->createCommand($queryStaff)->queryAll();
                
                foreach($resultArrayStaffs as $rAs)
                {
                    $excludeEmailsArray[]=$rAs['email'];
                }
                
                
//get exclude membrs                
          $queryMemebrs = "SELECT a.email,a.username,a.id,b.firstname,b.lastname FROM peg_mail_exclude_users as pmeu INNER JOIN peg_users as a ON a.id=pmeu.exclude_user INNER JOIN peg_profiles b ON a.id=b.user_id WHERE pmeu.user_type = 'Member' AND  pmeu.mail_content_id='".$mailContentID."'";
                $resultArrayMemebers = Yii::app()->db->createCommand($queryMemebrs)->queryAll();     
                
                foreach($resultArrayMemebers as $rAm)
                {
                    $excludeEmailsArray[]=$rAm['email'];
                }
                
                //make it unique exclude emails array
                $excludeEmailsArray=  array_unique($excludeEmailsArray);
                
                
//get include groups 
$arrayGroupcheck	= array();
if($mailContentID!='')
{
    $sqlCheckGroup = "SELECT a.email,a.username,a.id,b.firstname,b.lastname FROM peg_users as a
INNER JOIN peg_profiles as b ON a.id=b.user_id
INNER JOIN authvalue as av ON av.name = a.membership_type
INNER JOIN peg_mail_include_group as pmig on av.id=pmig.include_group
INNER JOIN (
SELECT tmp.id as uid from peg_users as tmp 
INNER JOIN AuthItemChild as au ON au.child=tmp.membership_type AND au.parent='Media Center Staff')
as pmi ON a.id=pmi.uid
WHERE a.`status`=1 and pmig.mail_content_id=".$mailContentID." and group_type='Departments'";
    
//    SELECT a.email,a.username,a.id,b.firstname,b.lastname FROM peg_users as a
//INNER JOIN peg_profiles as b ON a.id=b.user_id
//INNER JOIN authvalue as av ON av.name = a.membership_type
//INNER JOIN peg_mail_include_group as pmig on av.id=pmig.include_group
//INNER JOIN (SELECT user_id as uid FROM peg_membership_info WHERE (CURDATE() between fromdate and todate) 
//UNION
//SELECT tmp.id as uid from peg_users as tmp INNER JOIN AuthItemChild as au ON au.child=tmp.membership_type AND au.parent='Media Center Staff')
//as pmi ON a.id=pmi.uid
//WHERE a.`status`=1 and pmig.mail_content_id=".$mailContentID."
    
    $CheckGroupId	= Yii::app()->db->createCommand($sqlCheckGroup)->queryAll();
                foreach($CheckGroupId as $rAm)
                {
                    $finalEmailsArray[]=$rAm['email'];
                }
               
// as 42 Mail notification for New member so , the email address will not be here so skip this step         
if($mailContentID!=1 && $mailContentID!=15 && $mailContentID!=36 && $mailContentID!=42){        
$sqlCheckGroupMemvers="SELECT a.email,a.username,a.id,b.firstname,b.lastname FROM peg_users as a
INNER JOIN peg_profiles as b ON a.id=b.user_id
INNER JOIN authvalue as av ON av.name = a.membership_type
INNER JOIN peg_mail_include_group as pmig on av.id=pmig.include_group
INNER JOIN (SELECT user_id as uid FROM peg_membership_info WHERE (CURDATE() between date(fromdate) and date(todate)) 
UNION
SELECT tmp.id as uid from peg_users as tmp INNER JOIN AuthItemChild as au ON au.child=tmp.membership_type AND au.parent='Media Center Staff')
as pmi ON a.id=pmi.uid
WHERE a.`status`=1 and pmig.mail_content_id=".$mailContentID." and group_type='Membership'";                
  $CheckGroupIdMembers	= Yii::app()->db->createCommand($sqlCheckGroupMemvers)->queryAll();              
 
 
                foreach($CheckGroupIdMembers as $rAm)
                {
                  
                    if(in_array($rAm['email'], $emails))
                    $finalEmailsArray[]=$rAm['email'];
                }

    }
    else {
        
                foreach($emails as $rAm)
                {
                    $finalEmailsArray[]=$rAm;
                }
    }

} 

     $sendAdmin=$includeExtMails['send_admin'];
     $includeExtMails=explode(',',$includeExtMails['include_external_emails']);
    
     $finalExternalEmails =array();
     foreach ($includeExtMails as $iEm)
     {
         $finalExternalEmails[]=trim($iEm);
     }
     
     //Merge two arrays of include groups and external emails 
      $finalEmailsArray=array_merge($finalExternalEmails,$finalEmailsArray);     
      
      
   
      
      //Merge two arrays of mails to be send and merged arrays
     // $finalEmailsArray=array_merge($emails,$finalEmailsArray);     
      
       
      
      if($isAdmin==true && $sendAdmin=='Yes') {
			
			$sqlAdmin	= "SELECT username, email FROM peg_users WHERE superuser=1 AND status=1";			
			$EmailAdmin = Yii::app()->db->createCommand($sqlAdmin)->queryAll();
			for($j=0; $j<count($EmailAdmin); $j++)
			{
				if(trim($EmailAdmin[$j]['email'])!="")
					$emailArray[] = $EmailAdmin[$j]['email'];			
			}
            
             //Merge two arrays of final emails  and admin emails 
            $finalEmailsArray=array_merge($emailArray,$finalEmailsArray);  
		}
		
      
    
      
      //Making final email arrays
     $finalEmailsArray=array_diff($finalEmailsArray,$excludeEmailsArray);
     
     $finalEmailsArray = array_filter($finalEmailsArray);
    

     
   $SqlSetting = " SELECT * FROM peg_site_settings WHERE id=1";
	 $ArraySettingResult = Yii::app()->db->createCommand($SqlSetting)->queryAll();
	###------------------------------------------------------####
    Yii::app()->params['siteSettingsConfig'] =$ArraySettingResult[0];  
    
                Yii::import('application.extensions.phpmailer.JPhpMailer');
                $mail = new JPhpMailer;
                $mail->IsSMTP(); // telling the class to use SMTP
                $mail->SMTPDebug = false;
                $mail->SMTPSecure = "tls";
                $mail->SMTPAuth = true;
                $mail->Host = "smtp.mandrillapp.com";
                $mail->Port = 587;
                $mail->Username = "feisv@creativemileage.com";
                $mail->Password = "gGEq59I21HFrgUHNHC4zvA";
                $mail->SetFrom(Yii::app()->params['siteSettingsConfig']['site_email'], Yii::app()->params['siteSettingsConfig']['site_email_name']);
                $mail->ClearReplyTos();
                $mail->addReplyTo(Yii::app()->params['siteSettingsConfig']['site_reply_email'], Yii::app()->params['siteSettingsConfig']['site_email_name']);
                $mail->Subject = stripJunk($mailData['subject']);
                $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
                $mail->MsgHTML($CompleteMsg);
                
                if(count($finalEmailsArray)>0)
                {
                   
                    foreach ($finalEmailsArray as $email){
                      if(trim($email)!='')
                        $mail->AddAddress(trim($email));   
                     
                
                    }
                }
                if($mailData['filename']!='')
                {
                        $mail->AddAttachment($mailData['filename']); 
                }
                   
              $mail->Send();

   
     
    }//if
    
    


 }
 
 /*
  * $link = Capture original link 
  * Return formated link for SaaS
  */
 function cmMailLinkGenerate($link)
 {
 /*
 * tid = is random md5 key for any link
 *  mprout = The link e.g. project view page
 * mpunit = the app id 
 * Both of the above are encrypted by base64 encode. 
 */
    $generatedLink=APP_WEBURL.'mailprocessunit/index.php?tid='.md5(rand(56,5856566)).'&mprout='.  base64_encode($link).'&mpunit='.  base64_encode($_SESSION['apps']['api_key']); 
    
    return $generatedLink;
     
 }
 
}