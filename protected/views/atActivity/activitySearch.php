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
			<div class="col-sm-3 search-dropdown"> 							
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
			
			
			<div class="col-sm-9 search-dropdown"> 
			<span class="navbar-form navbar-left search_from" role="search">
				<div class="form-group search_fil">
				<input type="text" name="search_text" class="form-control" style="height:35px !important;" value="<?php if(isset($search_param['search_text'])) echo $search_param['search_text']; ?>" placeholder="Search by keywords like Address,Name ">
				</div>
				<button type="submit" class="btn btn-default search_submit">Submit</button>
			</span>							
		   </div>
	   </form>
	   
	  </div>
	</div>
	
	
	<div class="activity_section">	
		<div class="container"> 
                    <div class="content-box">
                        <h6 class="hading" style="font-size:20px;">Activity</h6> 
                    </div>        
			  
		<div class="panel panel-default">	 
		<table style="width:100%;" class="list-table" >
                    
                <thead>
		<tr>
		<td width="5%">&nbsp;Sl </td>
		<td width="20%">Partner Details</td>
		<td width="10%"></td>
		<td width="10%" class="learge_view"></td>		
		<td width="35%" class="learge_view"> </td>
		<td width="10%" align="right" class="learge_view"> </td>
		<td width="10%" class="learge_view"> </td>
		<!--
		<td width="10%" class="learge_view">Date Time</td>		
		<td width="35%" class="learge_view">Location </td>
		<td width="10%" align="right" class="learge_view">Price </td>
		-->
		</tr>
        </thead>    
				
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
                            <td valign="top" style="line-height: 30px;">&nbsp;<?php echo $i;?> </td>
                <td valign="top">
				<?php if(!empty($data['logo'])){  ?>
                     <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/uploads/<?php echo $data['logo'];?>" class="image" style="width: 140px !important; float: left; padding-right: 5px;"/>
				<?php }else{ ?>
                     <i class="fa fa-user"  style="width: 40px !important; float: left; padding-right: 5px;"></i>
                <?php } ?>						
		</td>
					
				<td colspan="6" valign="top">
				
				
					<table id="flex1" style="width:100%; padding:0; margin:0" >	
					<tbody>
					<tr class="vcard">			
							<td valign="top" data-title=""><?php echo $data['firstname']." ".$data['lastname']; ?></td>
							<td valign="top" data-title="" ><?php echo getDateFormat($data['activity_date']); ?><br /><?php echo $data['activity_time']; ?></td>
							
							<td valign="top" data-title="" > <i data-toggle="modal" data-target="#myMap" onclick="initialize_map('<?php echo $data['address']; ?> ');" class="fa fa-map-marker" style="font-size:22px; color: red; width: 25px; cursor: pointer;"></i>
											<?php echo $data['address']; ?> 
											</td>									
							<td data-title="" ><?php echo $data['price']; ?>$</td>
							<td data-title="" ></td>
					</tr>
					</tbody>
					</table>
				
				
				
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





<div id="myMap" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" id="lognform">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                <h4 class="modal-title">Google Map</h4>
            </div>
            <div class="modal-body">
                <div id="map_canvas" style="width:100%; height:400px"></div>

            </div>
        </div>
    </div>
</div>    


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var geocoder;
  var map;
  var address ="101 Thomson Road #01-30, Singapore 307591";
  function initialize_map(address_var) {
    address=address_var;
    
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
      zoom: 8,
      center: latlng,
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                { content: '<b>'+address+'</b>',
                  size: new google.maps.Size(150,50)
                });

            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

          } else {
            alert("No results found");
          }
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }
  }
</script>







