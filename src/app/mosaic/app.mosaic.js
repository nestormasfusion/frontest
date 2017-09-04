angular.module('app.mosaic', [])
	.directive('mosaic', function () {
		return {
			restrict: 'E',
			scope: {},
			templateUrl: 'src/app/mosaic/mosaic.tpl.html',
			link: function(scope, element, attrs) {
				$(document).ready(function () {
					$(function() {
						$('.carousel').carousel();
					});
				});
			},
		};
	}
);