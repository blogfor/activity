<div class="container">
       
    <div class="row">
        <h1>Ohh!</h1>
        <div class="span-12">
            <div class="content" style="margin: 5% 15% 10% 15%;">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/error-img.png" title="error">
				<p><span><label>O</label>hh.....</span>You Requested the page that is no longer There.</p>
				
                                <a href="<?php echo Yii::app()->getBaseUrl(true).'/site/index';?>">Back To Home</a>
				
   			</div>
        </div>
    </div>
</div>
<?php echo CHtml::encode($message); ?><?php echo $code; ?>
