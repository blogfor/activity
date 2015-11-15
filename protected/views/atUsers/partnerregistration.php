<?php
$baseUrl = Yii::app()->theme->baseUrl;

?>

<div class="container">
       
    <div class="row">
        <h1>BECOME A PARTNER</h1>
        <div class="span-12">
            
            <div id="statusMsg">
<?php if(Yii::app()->user->hasFlash('successMail')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('successMail'); ?>
    </div>
<?php endif; ?>

</div>
            
            
            <p>Grow your business with activity here.<br />
Activity here partners with children activity and enrichment class providers to help them reach new customers and grow their business.
</p>
<div>
Why use activity here?<br/><br/>
 
<strong>Nothing to Lose</strong><br/>
Listing free activities and free trial classes is free for all partners. We will work with partners on pricing of activities that are payable by our members.<br/><br/>
 
<strong>Targeted Audience</strong><br/>
List new classes and activities to parents who are actively seeking new learning opportunities for their children.<br/><br/>
 
<strong>Easy to Use</strong><br/>
Search and reservation of activities is simple and allows discovery of new activities and schools. Boost your online presence with our activity search and reservation system.<br/><br/>
 
<strong>Additional Revenue</strong><br/>
We will help you fill unused spots and pay you for each reservation by our users. You also gain potential new sign-ups for members who find an activity or school that suits their children.<br/><br/>
 
<strong>Marketing and Brand Exposure</strong><br/>
Activity here helps parents discover new enrichment classes and activities in their area based on their schedules.<br/><br/>
--<br/>
Please fill out the form below and our team will contact you. <br/>

</div>
 <div class="modal-body">
                    <div class="row reg-msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                    <div class="row reg-msg-success" style="color:green; padding-bottom: 10px; text-align: center;"></div>


                    <div class="panel panel-default">

                        <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">

                                <form method="post" name="partner-form" id="partner-form" action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name </label>
                                        <input name="companyname" id="companyname" style="outline: medium none;" value=""  class="form-control validate[required]" placeholder="Company Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website/facebook</label>
                                        <input name="website" id="website"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Website/facebook" type="text">
                                    </div>  
                                       
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Name</label>
                                        <input name="name" id="name"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Name" type="phone">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" id="email"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" placeholder="Email" type="email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputMobile">Mobile</label>
                                        <input name="mobile" id="mobile"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[number],maxSize[10]]" placeholder="Mobile" type="phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputMobile">Comments</label>
                                        <textarea name="comments" id="comments"  style="outline: medium none;" hidefocus="true" class="form-control validate[required]" placeholder="Comments"></textarea>
                                    </div> 
                                   
                                   

                                    <input type="submit" class="btn btn-default search_submit" style="background-color: rgb(221, 221, 221); padding: 5px 10px;" value="Contact Us"/>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function() {
        $("#partner-form").validationEngine();
      
    });
</script>    
    