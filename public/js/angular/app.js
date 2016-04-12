(function(){
	var app = angular.module('taskmanager',[], function($interpolateProvider) {
        // $interpolateProvider.startSymbol('<%');
        // $interpolateProvider.endSymbol('%>');
    });

	app.controller('TaskController',function(){
		this.product = gem;
	});

	var gem = {
		name : 'Dodecahedron',
		price: 2.95,
		description: '. . .',
	}
})();