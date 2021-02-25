		<div class="footer-wrapper">
			<div class="footer-section f-section-1">
				<p class="">Copyright © 2020 <!--a target="_blank" href="https://designreset.com">DesignReset</a-->, All rights reserved.</p>
			</div>
		</div>
	</div>
<!--  END CONTENT AREA  -->
</div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script type="text/javascript" src="assets/js/dashboard/dash_2.js"></script>
    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js"></script>
    <script src="https://cdn.tiny.cloud/1/6n3myua9poxbmvg6urimtw7v7qlazoftq67krogj1sbvs1gl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  <script>
 tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
    branding: false
  });
    $( function() {
    var availableTags = [
      "Shwetha",
      "Abc",
      "xyz",
      "Shruthi",
      "Ashwini",
      "Ramya"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyBSR3pigsWMH7goi_CthGQFckfb5QPOH8E&amp;v=3.21.5a&amp;libraries=drawing&amp;signed_in=true&amp;libraries=places,drawing,geometry"></script>
    <script>
     google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('location-text-boxs'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
              $('#lat').val(latitude);
              $('#lng').val(longitude);

               check();
            });
        });
       
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert('Geolocation is not supported by this browser.');
    }
}
function showPosition(position) {
              $('#lat').val(position.coords.latitude);
              $('#lng').val(position.coords.longitude);
             var res= getplacename(position.coords.latitude, position.coords.longitude) ;


              
}
function check()
{
 var lat=$('#lat').val();
 var lng=$('#lng').val();
 var location=$('#location-text-boxs').val();
if(lat =='' || lat == '')
{
 alert('please turn on GPS.')
  return false;
}
$.ajax({
    type: 'POST',
    url: "https://web.grocbay.com/check-location",
    data:{
        'lat':lat,
        'long':lng,
        'mode':0,
        'location':location
    },
    cache: false,
    beforeSend: function() {
     $('.location-status').html('<span class="location-progress">Checking location..</span>');

    },
    success: function(data) {
     if(data=='yes')
     {
 $('.location-status').html('<span class="location-success">Please wait...</span>');
window.location.reload();

     }
     else
     {
 $('.location-status').html('<span class="location-error">Oh No! <br>We are not serving for your location!</span>');
     }
      
},
    error: function(xhr) { // if error occured
        alert("Error occured.please try again");
        jQuery(placeholder).append(xhr.statusText + xhr.responseText);
        jQuery(placeholder).removeClass('loading');
    },
    complete: function() {
        
    },
    dataType: 'html'
});
}

function getplacename(lat, lng) {
var geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      // console.log(results)
        if (results[1]) {

              $('#location-text-boxs').val(results[0].address_components.filter(ac=>~ac.types.indexOf('locality'))[0].long_name);
               check();
      
        

        } else {
          // alert("No results found");
        }
      } else {
         alert("Geocoder failed due to: " + status);
      }
    });
 // return false;
}
    </script>
    <script src="assets/js/dropify.js"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
            $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $('#mycheckbox').change(function() {
         $('#mycheckboxdiv').toggle();
    });

    jQuery(document).ready( function () {
        $("#append").click( function(e) {
          e.preventDefault();
        $(".item-div").append('<div class="row form-row item-div">\
                                            <div class="col-lg-6 col-12">\
                                                <div class="form-group">\
                                                    <label for="t-text">Select Item</label>\
                                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">\
                                                        <option>Inactive</option>\
                                                        <option>Active</option>\
                                                    </select>\
                                                </div>\
                                            </div>\
                                            <div class="col-lg-6 col-12">\
                                                <div class="form-group">\
                                                    <label for="t-text">Select variation</label>\
                                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">\
                                                        <option>Inactive</option>\
                                                        <option>Active</option>\
                                                    </select>\
                                                </div>\
                                            </div>\
                                            <div class="col-lg-6 col-12">\
                                                <div class="form-group">\
                                                    <label for="t-text">Quantity</label>\
                                                    <input id="t-text" type="number" name="txt" placeholder="Priority"\
                                                        class="form-control form-control-sm" required>\
                                                </div>\
                                            </div>\
                                            <div class="col-lg-6 col-12 align-self-center">\
                                                <a href="#" class="remove_this" id="append" name="append">\
                                            Remove Item</a>\
                                            </div>\
                                        </div>');
        return false;
        });

    jQuery(document).on('click', '.remove_this', function() {
        jQuery(this).parent().remove();
        return false;
        });
    $("input[type=submit]").click(function(e) {
      e.preventDefault();
      $(this).next("[name=textbox]")
      .val(
        $.map($(".inc :text"), function(el) {
          return el.value
        }).join(",\n")
      )
    })
  });
        </script>
</body>
</html>