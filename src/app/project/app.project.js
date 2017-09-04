angular.module('app.project', [])
	.directive('project', function () {
		return {
			restrict: 'E',
			scope: {},
			templateUrl: 'src/app/project/project.tpl.html',
			link: function(scope, element, attrs) {
				$(document).ready(function () {
					$(function() {
						$('select').material_select();
						$('#textarea1').trigger('autoresize');
					});
				});
			},
		};
	}
);