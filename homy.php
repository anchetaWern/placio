<?php
require_once('/php/header.php'); 
require_once('/php/user_header.php');
?>

<div id="places_container">
	<div id="map_container">
		<div id="map_canvas"></div>
	</div>

	<div id="sides_container">
		<div class="headings">
			<h4>Details</h4>
		</div>
		<div class="contents">

			<ul class="nav nav-pills" id="places_tabs">
				<li class="active">
					<a href="#new_places">New Places</a>
				</li>
				<li>
					<a href="#existing_places">Existing Places</a>
				</li>
			</ul>
			<div class="tab-content">
					
					<div class="tab-pane active" id="new_places">
						<form method="post" id="create_form">
							<label for="search_new_places">New Places</label>
							<input type="text" placeholder="Search New Places" id="search_new_places" autofocus>
							
							<label for="place">Name</label>
							<input type="text" name="n_place" id="n_place"/>
							
							<label for="description">Description</label>
							<input type="text" name="n_description" id="n_description"/>
							
							<button id="plot_marker" class="btn">Plot Marker</button>
							<button id="btn_save" class="btn btn-primary">Save</button>
						</form>	
					</div><!--end of tab-pane-->	
					<div class="tab-pane" id="existing_places">
						<form method="post" id="update_form">
							<input type="hidden" name="place_id" id="place_id"/>
							<label for="search_ex_places">Saved Places</label>
							<input type="text" placeholder="Search Saved Places" id="search_ex_places" list="saved_places">
							<datalist id="saved_places">
							<?php foreach($places as $row){ ?>
								<option value="<?php echo $row->place; ?>" data-id="<?php echo $row->place_id; ?>" data-lat="<?php echo $row->lat; ?>" data-lng="<?php echo $row->lng; ?>" data-place="<?php echo $row->place; ?>" data-description="<?php echo $row->description; ?>"><?php echo $row->place; ?></option>
							<?php } ?>	
							</datalist>
							
							<label for="place">Name</label>
							<input type="text" name="e_place" id="e_place"/>
							
							<label for="description">Description</label>
							<input type="text" name="e_description" id="e_description"/>
							
							<button id="btn_update" class="btn btn-primary">Update</button>
							<a href="/placio/photos.php" id="link_upload">Upload Photos</a>
						</form>	
					</div>
					
			</div><!--end of tab-content-->
		</div>
	</div>
</div>

<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD9uiyFbXfbSOsY6umTUtl4_rvl_LkQKxE&sensor=false&libraries=places">
</script>

<script>
		$('#link_upload').click(function(e){
			
			var place_id	= $.trim($('#place_id').val());
			var place		= $.trim($('#e_place').val());
			
			if(place == ''){
				e.preventDefault();
			}
			
			$.post('php/store.php', {'place' : place, 'place_id' : place_id});
			
		});
		
		$('input[type=text]').attr('autocomplete','off');
		var homeLatlng = new google.maps.LatLng(18.35827827454, 121.63744354248);
		var homeMarker = new google.maps.Marker({
			position: homeLatlng,
			map: map,
			draggable: true
		});
		
		
		google.maps.event.addListener(homeMarker, 'position_changed', function(){
			var lat = homeMarker.getPosition().$a;
			var lng = homeMarker.getPosition().ab;
		});
		
        var myOptions = {
          center: new google.maps.LatLng(16.61096000671, 120.31346130371),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
		
		google.maps.event.addListener(map, 'center_changed', function(){
			var lat = homeMarker.getPosition().$a;
			var lng = homeMarker.getPosition().ab;
		});
		
		$('#search_ex_places').blur(function(){
			
			var val = $(this).val();
			var exists = 0;
			var lat = 0;
			var lng = 0;
			$('#saved_places option').each(function(index){
				var cur_id = $(this).data('place');
				
				if(cur_id == val){
					exists = 1;
					$('#place_id').val($(this).data('id'));
					lat = $(this).data('lat');
					lng = $(this).data('lng');
					$('#e_place').val($(this).data('place'));
					$('#e_description').val($(this).data('description'));
				}
			});
			
			$.post('php/set_place.php', {'place_id' : $('#place_id').val()}, function(data){
				console.log(data);
			});
			
			if(exists == 0){
				$('input[type=text], input[type=hidden]').val('');
				
			}else{
				
				var position = new google.maps.LatLng(lat, lng);
				
				homeMarker.setMap(map);
				homeMarker.setPosition(position);
				map.setCenter(homeMarker.getPosition());
				map.setZoom(17);
				
			}
		});
		
		$('#plot_marker').click(function(e){
			e.preventDefault();
			homeMarker.setMap(map);
			homeMarker.setPosition(map.getCenter());
			map.setCenter(homeMarker.getPosition());
			map.setZoom(17);
			
			$('input[type=text], input[type=hidden]').val('');
		});
		
		var input = document.getElementById('search_new_places');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);
		
		//executed when a place is selected from the search bar
		google.maps.event.addListener(autocomplete, 'place_changed', function(){
		
		
          var place = autocomplete.getPlace();
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17); 
          }

		homeMarker.setMap(map);
        homeMarker.setPosition(place.geometry.location);
		
		
          var address = '';
          if (place.address_components) {
            address = [(place.address_components[0] &&
                        place.address_components[0].short_name || ''),
                       (place.address_components[1] &&
                        place.address_components[1].short_name || ''),
                       (place.address_components[2] &&
                        place.address_components[2].short_name || '')
                      ].join(' ');
          }
		});
		
		$('#create_form').submit(function(e){
			e.preventDefault();
			var place		= $.trim($('#n_place').val());
			var description	= $.trim($('#n_description').val());
			var lat = homeMarker.getPosition().$a;
			var lng = homeMarker.getPosition().ab;
			
			$.post('php/process_form.php', {'place' : place, 'description' : description, 'lat' : lat, 'lng' : lng}, 
				function(data){
					var place_id = data;
					var new_option = $('<option>').attr({'data-id' : place_id, 'data-place' : place, 'data-lat' : lat, 'data-lng' : lng, 'data-description' : description}).text(place);
					new_option.appendTo($('#saved_places'));
				}
			);
			
			$('input[type=text], input[type=hidden]').val('');
			
		});
		
		$('#update_form').submit(function(e){
			e.preventDefault();
			var place_id 	= $.trim();
			var place		= $.trim($('#e_place').val());
			var description	= $.trim($('#e_description').val());
			var lat = homeMarker.getPosition().$a;
			var lng = homeMarker.getPosition().ab;
			
			$.post('php/process_form.php', {'place_id' : place_id, 'place' : place, 'description' : description, 'lat' : lat, 'lng' : lng});
			$('input[type=text], input[type=hidden]').val('');
		});
		
		$('#places_tabs a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
</script>
 
<?php
require_once('/php/footer.php');
?>