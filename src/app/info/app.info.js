angular.module('app.info', [])
	.directive('info', function () {
		return {
			restrict: 'E',
			controller: 'infoController',
			scope: {},
			templateUrl: 'src/app/info/info.tpl.html',
		};
	}
).controller('infoController', ['$scope', function($scope){
	var mymap = L.map('map').setView([20.678241597926203, -103.3586883544922], 13);
	var popup = L.popup()
		.setLatLng([20.682256610866517, -103.35858249105516])
		.setContent("<h5 class='blue-text'><strong>BUILD</strong><h5>")
		.openOn(mymap);
	var marker = L.marker([20.678241597926203, -103.3586883544922]).addTo(mymap);

	L.tileLayer(
		'http://mt{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}&s=',
		{ 
			attribution: '<i class="fa fa-github"></i><a href="https://github.com/0zuna/">Ozuna</a>', 
			maxZoom: 19, 
			subdomains: '0123' 
		}).addTo(mymap);
		mymap.on('click', function(e) {
		console.log("[" + e.latlng.lat + ", " + e.latlng.lng+ "]")
});
}]);