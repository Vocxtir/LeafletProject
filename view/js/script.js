$(document).ready(function() {

//	/**
//	 * Reder map
//	 */
//	var zoom = 6;
//	var tileSize = 90;
//	var squareSize = (Math.pow(2, zoom) - 1) * tileSize;
//	var tilesUrl = passedFromServer.baseUrl + 'map/tile?x={x}&y={y}';
//
//	/**
//	 * Create new map object
//	 */
//	var map = new L.Map('map-container', {
//		center : [0, 0],
//		zoom : zoom,
//		zoomControl : false,
//		// the next is the very main line here
//		crs : L.CRS.Simple,
//		maxBounds : new L.LatLngBounds(
//			new L.LatLng(-squareSize, squareSize),
//			new L.LatLng(0, 0)
//		)
//	});
//
//	/**
//	 * Add a tile layer (e.g. where do we get the images from?)
//	 */
//	L.tileLayer(tilesUrl, {
//		maxZoom : zoom,
//		minZoom : zoom,
//		tileSize : tileSize,
//		attribution : false,
//		continuousWorld : false,
//	}).addTo(map);
//
//	/**
//	 * Add a popup to a map for debug (yes, this is not yet finished)
//	 */
//	var popup = L.popup();
//
//	function onMapClick(e) {
//		popup
//		  .setLatLng(e.latlng)
//		  .setContent("You clicked the map at " + e.latlng.toString())
//		  .openOn(map);
//      }
//    map.on('click', onMapClick);*

map = L.map('map').setView([48.856578,2.351828], 2);
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
})