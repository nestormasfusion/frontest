angular.module('app.hero', [])
	.directive('hero', function () {
		return {
			restrict: 'E',
			scope: {},
			templateUrl: 'src/app/hero/hero.tpl.html',
			link: function(scope, element, attrs) {
				$(document).ready(function () {
					$(function() {
						$('.slider').slider();
					});
				});
			},
		};
	}
);