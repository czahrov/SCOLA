$(document).ready(function() {
var point = {
	lat: 49.6184729,
	lng: 20.694878000000017,
};

$('#my_map').gmap3({
	map:{
		options:{
			center: point,
			zoom: 18,
			mapTypeId: google.maps.MapTypeId.MAP,
			
		}
	},
	marker:{
		latLng: point,
	},
	infowindow:{
		position: point,
		options:{
			content: "Centrum Językowe SCOLA",
			
		}
	}
	
});
});