// ------------- slider -----------------
$('.slider1 .allProducts').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  rtl: true
});
// --------------
$('.del').click(function(){
    $(this).parent().fadeOut();
});
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
  }
// ----------------
var incrementPlus;
var incrementMinus;
var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");
var incrementPlus = buttonPlus.click(function() {
	var $n = $(this)
		.parent(".button-container")
		.parent(".inc_dec")
		.find(".qty");
	$n.val(Number($n.val())+1 );
});
var incrementMinus = buttonMinus.click(function() {
		var $n = $(this)
		.parent(".button-container")
		.parent(".inc_dec")
		.find(".qty");
	var amount = Number($n.val());
	if (amount > 0) {
		$n.val(amount-1);
	}
});
// -------------
$(document).ready(function(){
    var x = $(document).height() - 60;
    $('#map-canvas').css('height',x);
})
// ------------map---------------
function init() {
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      center: {
        lng: 54.1036546,
        lat: 23.9761043
      },
      zoom: 12
    });
 
 
    var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));
    google.maps.event.addListener(searchBox, 'places_changed', function() {
      searchBox.set('map', null);
 
 
      var places = searchBox.getPlaces();
 
      var bounds = new google.maps.LatLngBounds();
      var i, place;
      for (i = 0; place = places[i]; i++) {
        (function(place) {
          var marker = new google.maps.Marker({
 
            position: place.geometry.location
          });
          marker.bindTo('map', searchBox, 'map');
          google.maps.event.addListener(marker, 'map_changed', function() {
            if (!this.getMap()) {
              this.unbindAll();
            }
          });
          bounds.extend(place.geometry.location);
 
 
        }(place));
 
      }
      map.fitBounds(bounds);
      searchBox.set('map', map);
      map.setZoom(Math.min(map.getZoom(),12));
 
    });
  }
  // google.maps.event.addDomListener(window, 'load', init);
