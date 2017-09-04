angular.module('app.nave', [])
	.directive('nave', function () {
		return {
			restrict: 'E',
			scope: {},
			templateUrl: 'src/app/nave/nave.tpl.html',
			link: function(scope, element, attrs) {
				$(document).ready(function () {
					$(function() {
						$(".button-collapse").sideNav();
					});
				});
			},
		};
	}
);