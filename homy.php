<?php
require_once('/php/header.php'); 
require_once('/php/user_header.php');
?>

 <div id="places_container">
	<div id="map_container">
	
	</div>
	
	<div id="sides_container">
		<label for="place">Name</label>
		<input type="text" name="place" id="place"/>
		
		<label for="description">Description</label>
		<input type="text" name="description" id="description"/>
		
		<button class="btn btn-primary">Update</button>
	</div>
 </div>
   
  
    
<?php
require_once('/php/footer.php');
?>