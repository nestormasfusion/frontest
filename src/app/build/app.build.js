angular.module('app.build', [])
	.directive('build', function () {
		return {
			restrict: 'E',
			scope: {},
			templateUrl: 'src/app/build/build.tpl.html',
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