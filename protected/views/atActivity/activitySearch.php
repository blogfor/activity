<?php
/* @var $this AtActivityController */
/* @var $model AtActivity */

//print_r($search_result);
//print_r($search_param);

?>
<script>
function setvalue(obj,aid){
	$("#activity-text").html($(obj).html());
	$("#activity_id").val(aid);
}

$(document).ready(function(){
	var aid=$("#activity_id").val();
	if(aid>0){
	var list_text=$(".list"+aid).html();
	$("#activity-text").html(list_text);
	}
});

</script>
 
	<div class="search_box"> 
	  <div class="container">
		<form method="POST" name="form_search" id="form_search" action="<?php echo Yii::app()->createUrl('/atActivity/searchactivity');?>">
			<div class="col-sm-3"> 							
			<div class="dropdown">
			  <button id="dLabel" class="search_option" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span id="activity-text"> Activity </span>
				<i class="fa fa-chevron-circle-down down-arows_search"></i>
			  </button>
			  <ul class="dropdown-menu search_drop-bg" aria-labelledby="dLabel">
				  <?php
				  foreach($resultACTIVITY as $rActivity)
				  {
					   echo '<li><a href="#" class="list'.$rActivity['id'].'" onclick="setvalue(this,'.$rActivity['id'].');">'.$rActivity['activity_name'].'</a> </li>';
				  }
				  ?>								
			  </ul>
			  <input type="hidden" name="activity_id" id="activity_id" value="<?php if(isset($search_param['activity_id'])) echo $search_param['activity_id']; ?>">
			</div>
			</div>
			<div class="col-sm-9"> 
			<span class="navbar-form navbar-left search_from" role="search">
				<div class="form-group search_fil">
				<input type="text" name="search_text" class="form-control" value="<?php if(isset($search_param['search_text'])) echo $search_param['search_text']; ?>" placeholder="Search by keywords">
				</div>
				<button type="submit" class="btn btn-default search_submit">Submit</button>
			</span>							
		   </div>
	   </form>
	   
	  </div>
	</div>
	
	
	<div class="activity_section">	
		<div class="container"> 
			 <h6 class="hading" style="font-size:20px;">Activity</h6> 
			  
		<div class="panel panel-default">	 
		<table style="width:100%;" class="list-table" >
		<tr style="background-color: #4F81BD !important; color: #FFF !important;">
		<td>&nbsp;Sl </td>
		<td>Partner Details</td>
		<td>Date </td>
		<td>Time </td>
		<td>Location </td>
		<td>Price </td>
		<td>Action </td>
		</tr>
		<tbody>
		<?php 
		if(count($search_result)==0)
		echo "<tr><td colspan=6 text-align='center' > No activity is enlisted </td></tr>";
		else{
		    $i=1;
			foreach($search_result as $data){
			//print_r($data);
			?>
			<tr>
				<td>&nbsp;<?php echo $i;?> </td>
				<td>
				<?php if(!empty($data['profilepic'])){ ?>
				<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $data['profilepic'];?>" class="image"/>
				<?php } ?>
				<?php echo $data['firstname']." ".$data['lastname']; ?> 				
				</td>
				<td><?php echo $data['activity_date']; ?> </td>
				<td><?php echo $data['activity_time']; ?> </td>
				<td><?php echo $data['address']; ?> 	  </td>
				<td><?php echo $data['price']; ?>$		  </td>
				<td>	
				
				</td>
			</tr>			
			<?php
			$i++;
			}		
		}
		?>	
		</tbody>	
		</table>
		</div>
		
		</div>
	</div>
        
