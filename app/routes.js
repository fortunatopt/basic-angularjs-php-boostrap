'use strict';

angular.module('phpApp')
	.config(['$routeProvider',
		function ($routeProvider) {

			var appModules = 'Application/modules/'
			$routeProvider

				.when('/', { templateUrl: 'app/modules/index/template.html', controller: 'indexCtrl' })
				.when('/', { templateUrl: 'app/modules/index/template.html', controller: 'indexCtrl' })
				
				.when('/data', { templateUrl: 'app/modules/data/template.html', controller: 'dataCtrl' })

				.when('/setup', { templateUrl: 'app/modules/setup/template.html', controller: 'setupCtrl' })

				.when('/remove', { templateUrl: 'app/modules/remove/template.html', controller: 'removeCtrl' })

				.when('/delete', { templateUrl: 'app/modules/delete/template.html', controller: 'deleteCtrl' })

				.when('/insert', { templateUrl: 'app/modules/insert/template.html', controller: 'insertCtrl' })

		}]);

