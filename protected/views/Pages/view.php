<div class="container">
    <?php
    
     $resultArray = Yii::app()->db->createCommand("SELECT * FROM at_pages WHERE page_slug='".$slug."'")->queryRow();
     
    
    ?>
    
    <div class="row">
        <h1><?php echo $resultArray['page_name'];?></h1>
        <div class="span-12">
            <?php echo $resultArray['page_description'];?>
        </div>
    </div>
</div>
