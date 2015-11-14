<?php
$baseUrl = Yii::app()->theme->baseUrl;

?>

<div id="main" class="site-main" role="main">

    <div class="profile_section"> 
      
       <div class="container"> 
         <h3 class="hading">Profile details</h3>
         
        <div class="col-sm-2 pull-left profile-img"> <img src="<?php echo $baseUrl;?>/images/temp/avatar-1.jpg" alt=""> 
            <h5> <?php echo strtoupper($user_data['firstname']." ".$user_data['lastname']);?> </h5>
            <h6> <?php echo $user_data['email'];?> </h6>
            
            <div class="socail_icon">
                <ul>
                <li>
                <a href="#" hidefocus="true" style="outline: medium none;">
                <i class="fa fa-facebook"></i>
                </a>
                </li>
                <li>
                <a href="#" hidefocus="true" style="outline: medium none;">
                <i class="fa fa-twitter"></i>
                </a>
                </li>
                <li>
                <a href="#" hidefocus="true" style="outline: medium none;">
                <i class="fa fa-google-plus"></i>
                </a>
                </li>

                </ul>
                </div>
                            
          </div>
          
        <div class="col-sm-10 pull-right">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
             <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingOne">
                 <h4 class="panel-title">
                   <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Personal Details
                   </a>
                 </h4>
               </div>
               <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                 <div class="panel-body">

                     <form method="post" name="Profiledtls" id="Profiledtls" action="<?php echo Yii::app()->createUrl('//atUsers/updateprofile');?>">
                     <div class="form-group col-lg-6">
                       <label for="exampleInputEmail1">First Name</label>
                       <input type="text" class="form-control" id="firstname" name="firstname" placeholder="first name" value="<?php echo $user_data['firstname'];?>">
                     </div>
                       
                     <div class="form-group col-lg-6">
                       <label for="exampleInputEmail1">Last Name</label>
                       <input type="text" class="form-control" id="lastname" name="lastname" placeholder="last name" value="<?php echo $user_data['lastname'];?>">
                     </div>
                       
                       
                     <div class="form-group col-lg-10">
                       <label for="exampleInputEmail1">Address</label>
                       <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $user_data['address1'];?>" placeholder="address">
                     </div>
                       
                       
                     <div class="form-group col-lg-2">
                       <label for="exampleInputPassword1">Zip Code</label>
                       <input type="text" class="form-control" id="zipcode" name="zipcode"  value="<?php echo $user_data['zipcode'];?>" placeholder="Zipcode">
                     </div>
                       
                     <div class="form-group col-lg-12">
                       <label for="exampleInputEmail1">Email</label>
                       <input type="text" class="form-control validate[required] " id="email" name="email" value="<?php echo $user_data['email'];?>" placeholder="email">
                     </div>
                       
                      <div class="form-group col-lg-6">
                       
                       <label for="exampleInputEmail1">Office Phone</label>
                       <input type="text" class="form-control" id="office_phone" name="office_phone" placeholder="office phone" value="<?php echo $user_data['office_phone'];?>">
                     </div>
                       
                     <div class="form-group col-lg-6">
                       <label for="exampleInputEmail1">Home Phone</label>
                       <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="home phone" value="<?php echo $user_data['home_phone'];?>">
                     </div>  
                       
                     <div class="form-group col-lg-12 pull-right">  
                         <button type="submit" class="btn btn-default payment-buttam" style="float: right;">Update</button>
                     </div>
                   </form>
                     
                <script>                    
                $(document).ready(function(){
			// binds form submission and fields to the validation engine
			$("#Profiledtls").validationEngine();
        	});
                </script>
  


                 </div>
               </div>
             </div>
             
                
             <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingThree">
                 <h4 class="panel-title">
                   <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Account Details
                   </a>
                 </h4>
               </div>
               <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                 <div class="panel-body">
                    <form method="post" name="Profileacdtls" id="Profileacdtls" action="<?php echo Yii::app()->createUrl('//atUsers/updateprofileaccount');?>">
                     <div class="form-group">
                       <label for="exampleInputEmail1">User Name</label>
                       <input type="text" class="form-control" id="username" name="username" placeholder="user name" value="<?php echo $user_data['username'];?>" >
                     </div>
                       
                     <div class="form-group">
                       <label for="exampleInputEmail1">New Password </label>
                       <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Conform Password</label>
                       <input type="password" class="form-control" id="con_password" name="con_password" placeholder="conform password">
                     </div>
                     
                     <div class="form-group col-lg-12 pull-right">    
                         <input type="submit" class="btn btn-default payment-buttam" value="Update" style="float:right;">
                     </div>
                   </form>
                <script>                    
                $(document).ready(function(){
			// binds form submission and fields to the validation engine
			$("#Profileacdtls").validationEngine();
        	});
                </script>
                 </div>
               </div>
             </div>
           </div>
        </div>
          
       </div>
    </div>  
    

    
</div>    