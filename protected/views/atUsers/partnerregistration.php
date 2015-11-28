<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<style>
    .media-content{padding: 0 10px 0 10px !important;}
</style>
<div class="container">

    <div class="row">
        <h1>WHY USE ACTIVITYHERE?</h1>
        <div class="col-sm-12">

            <div id="statusMsg">
                <?php if (Yii::app()->user->hasFlash('successMail')): ?>
                    <div class="alert alert-success">
                        <?php echo Yii::app()->user->getFlash('successMail'); ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="row col-sm-12">

                <div class="col-sm-4 work">
                    <div class="media-block">
                        <div class="media-thumb">
                            <img src="<?php echo $baseUrl; ?>/images/Partner3.png" class="media-object" alt="">
                        </div>
                        <div class="media-title">
                            Nothing to Lose                  
                        </div>
                        <div class="media-content">                        
                            Listing free activities and free trial classes is free for all partners. We will work with partners on pricing of activities that are payable by our members.
                        </div>
                    </div>
                </div>




                <div class="col-sm-4 work">
                    <div class="media-block">
                        <div class="media-thumb">
                            <img src="<?php echo $baseUrl; ?>/images/Partner1.png" class="media-object" alt="">
                        </div>
                        <div class="media-title">
                            Targeted Audience             
                        </div>
                        <div class="media-content">                        
                            List new classes and activities to parents who are actively seeking new learning opportunities for their children.
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 work">
                    <div class="media-block">
                        <div class="media-thumb">
                            <img src="<?php echo $baseUrl; ?>/images/Partner4.png" class="media-object" alt="">
                        </div>
                        <div class="media-title">
                            Easy to Use      
                        </div>
                        <div class="media-content">                        
                            Search and reservation of activities is simple and allows discovery of new activities and schools. Boost your online presence with our activity search and reservation system.
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 work">
                    <div class="media-block">
                        <div class="media-thumb">
                            <img src="<?php echo $baseUrl; ?>/images/Partner2.png" class="media-object" alt="">
                        </div>
                        <div class="media-title">
                            Additional Revenue
                        </div>
                        <div class="media-content">                        
                            We will help you fill unused spots and pay you for each reservation by our users. You also gain potential new sign-ups for members who find an activity or school that suits their children.
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 work">
                    <div class="media-block">
                        <div class="media-thumb">
                            <img src="<?php echo $baseUrl; ?>/images/Partner5.png" class="media-object" alt="">
                        </div>
                        <div class="media-title">
                            Marketing and Brand Exposure
                        </div>
                        <div class="media-content">                        
                            Activity here helps parents discover new enrichment classes and activities in their area based on their schedules.
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" style="margin-top: 10px;">


                <div class="modal-body col-sm-8" style="margin:0 20%;">
                    <div class="row reg-msg-error" style="color:red; padding-bottom: 10px; text-align: center;"></div>
                    <div class="row reg-msg-success" style="color:green; padding-bottom: 10px; text-align: center;"></div>


                    <div class="col-sm-12" style="background-color: #4e80bc; padding: 5px 5px;">
                        Please fill in the form below and our team will contact you
                    </div>


                    <div class="panel panel-default">

                        <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">

                                <form method="post" name="partner-form" id="partner-form" action="">
                                    <div class="form-group">
<!--                                        <label for="exampleInputEmail1">Company Name </label>-->
                                        <input name="companyname" id="companyname" style="outline: medium none;" value=""  class="form-control validate[required]" placeholder="Company Name" type="text">
                                    </div>
                                    <div class="form-group">
<!--                                        <label for="exampleInputEmail1">Website/facebook</label>-->
                                        <input name="website" id="website"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Website/Facebook" type="text">
                                    </div>  

                                    <div class="form-group">
<!--                                        <label for="exampleInputMobile">Name</label>-->
                                        <input name="name" id="name"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required]" placeholder="Name" type="phone">
                                    </div>

                                    <div class="form-group">
<!--                                        <label for="exampleInputEmail1">Email</label>-->
                                        <input name="email" id="email"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[email]]" placeholder="Email" type="email">
                                    </div>

                                    <div class="form-group">
<!--                                        <label for="exampleInputMobile">Mobile</label>-->
                                        <input name="mobile" id="mobile"  style="outline: medium none;" value="" hidefocus="true" class="form-control validate[required,custom[number],maxSize[10]]" placeholder="Phone" type="phone">
                                    </div>

                                    <div class="form-group">
<!--                                        <label for="exampleInputMobile">Comments</label>-->
                                        <textarea name="comments" id="comments"  style="outline: medium none;" hidefocus="true" class="form-control validate[required]" placeholder="Comments"></textarea>
                                    </div> 



                                    <input type="submit" class="btn btn-black btn-small btn-transparent" style="background-color: #f79646; padding: 5px 10px;" value="GET IN TOUCH"/>
                                </form>

                            </div>
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
