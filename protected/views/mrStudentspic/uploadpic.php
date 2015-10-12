<?php
/* @var $this MrUsersController */
/* @var $model MrUsers */

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <style>
        .container
        {
            position: absolute;
           /* top: 10%; left: 10%; right: 0; bottom: 0;*/
        }
        .action
        {
            width: 400px;
            height: 30px;
            margin: 10px 0;
        }
        .cropped>img
        {
            margin-right: 10px;
        }
		
		.imageBox
		{
		position: relative;
		height: 400px;
		width: 400px;
		border:1px solid #aaa;
		background: #fff;
		overflow: hidden;
		background-repeat: no-repeat;
		cursor:move;
		}
		
		.imageBox .thumbBox
		{
		position: absolute;
		top: 45%;
		left: 50%;
		width: 200px;
		height: 250px;
		margin-top: -100px;
		margin-left: -100px;
		box-sizing: border-box;
		border: 1px solid rgb(102, 102, 102);
		box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
		background: none repeat scroll 0% 0% transparent;
		}
		
		.imageBox .spinner
		{
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		text-align: center;
		line-height: 400px;
		background: rgba(0,0,0,0.7);
		}
    </style>
</head>
<body>

<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/yui-min.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/cropbox.js"></script>

<div class="container">
	<div style="float:left;">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <div class="action">
        <input type="file" id="file" style="float:left; width: 250px">
        <input type="button" id="btnCrop" value="Crop" style="float: right" >
        <input type="button" id="btnZoomIn" value="+" style="float: right">
        <input type="button" id="btnZoomOut" value="-" style="float: right">
    </div>
	</div>
	
    <div class="cropped" style="float:left; padding-left:20px;">	
    </div>
	
	<input type="hidden" id="imagestr">
	<br>
	
	<input type="button" value="Submit" onClick="showClases();"> 
	<input type="button" value="Close" onClick="parent.closebox_login();"> 
			
</div>



<script type="text/javascript">
    YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner'           
        }
		
        var cropper = new Y.cropbox(options);
        Y.one('#file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.cropbox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop').on('click', function(){
            var img = cropper.getDataURL()	
			$('.cropped').html('');		
            Y.one('.cropped').append('<img src="'+img+'">');
			$("#imagestr").val(img);
			
        })
        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    })
	
</script>


<script type="text/javascript">
    function showClases()
    {
        $.ajax({
			type: "POST",
			url: "<?php echo Yii::app()->createUrl('mrStudentspic/uploadpic'); ?>",
			data: "pic=" + $('#imagestr').val(),
			success: function(msg) {
				parent.setPic(msg);
			}
		});
    }
</script>


</body>
</html>