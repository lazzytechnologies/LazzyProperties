<br><br><br>
        <!-- register-area -->
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4EFKbbWeDCGWiH4VHV6aQTDVI0op9bP8&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4EFKbbWeDCGWiH4VHV6aQTDVI0op9bP8&libraries=places&callback=initAutocomplete"
        async defer></script>
  
  
  
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-12">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Post A Property </h2> 
                           
                           <div class="form-group">


 
<form id="show" action="" method="post">
<?php echo post_property();?> 
<div class="form-group">
    <label for="Lastname">Upload Property Image</label>
    <input id="input-b3" name="input-b3[]" type="file" class="file" multiple 
    data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">

</div>

<div class="form-group">
    <label for="Lastname">Title</label>
    <input type="text" required class="form-control" name="post_title" placeholder="Title">
</div>
<div class="form-group">
    <label for="Firstname">Price</label>
    <input type="number" required class="form-control" name="post_price" placeholder="&#8369 Price">
</div>
<div class="form-group">
    <label for="Firstname">Type</label>
     <select id="lunchBegins" class="selectpicker" name="post_type" title="Select Type">

                                        <option value="a">For Sale</option>
                                        <option value="b">For Rent</option>
                                        <option value="c">New Home and Development</option>
                                        <option value="d">Commercial and Land</option>
                                        
                                    </select>
                               
</div>
<div class="form-group">
    <label for="Firstname">Description</label>
   <textarea class="form-control" rows="5" name="post_description" id="comment"></textarea>
</div>

<div class="form-group">
    <label for="Firstname">Location</label>
    <input type="text" required class="form-control" onFocus="geolocate()" id="autocomplete" name="post_location" placeholder="Address"></input>
	<input type="hidden" id="country" name="post_country" ></input>
	<input type="hidden" id="postal_code" name="post_zip" ></input>
	<input type="hidden" id="administrative_area_level_1" name="post_state" ></input>
	<input type="hidden" id="locality" name="post_city" ></input>
	<input type="hidden" id="route" name="post_route" ></input>
	<input type="hidden" id="street_number" ></input>
	
</div>



</div>

<div class="form-group">
    <label for="Firstname">Features</label>
   <div class="row">
        <div class="col-xs-6 form-group">
            <label>Stories</label>
            <input class="form-control" type="number" placeholder="No. of Stories" name="post_stories"/>
        </div>
        <div class="col-xs-6 form-group">
            <label>Bed</label>
            <input class="form-control" type="number" placeholder="No. of Bedrooms" name="post_bed"/>
        </div>
        <div class="col-xs-6 form-group">
            <label>Baths</label>
            <input class="form-control" type="number" placeholder="No. of Bathrooms" name="post_bath"/>
        </div>

        <div class="col-xs-6 form-group">
            <label>Garage</label>
            <input class="form-control" type="number" placeholder="No. of Cars fit in Garage" name="post_garage"/>
        </div>
    </div>
</div>
<label for="Lastname">Size</label>
<div class="form-group">
    <label for="Lastname">Land Size</label>
    <input type="text" required class="form-control" name="post_land" placeholder="Land Size">
</div>

<div class="form-group">
    <label for="Firstname">Floor Size</label>
    <input type="number" required class="form-control" name="post_floor" placeholder="Floor Size">
</div>

<div class="text-center">
    <button type="submit" name="post_submit" class="btn btn-default">Post Now!</button>
</div>
</form>




                        </div>
                    </div>
                </div>

               
                        
                    </div>
                </div>






            </div>
        </div>      
