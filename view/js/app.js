(function () 
{
  var app = angular.module('universidadApp', ['angularUtils.directives.dirPagination']);

  app.controller
  ('listadoCtrl', 
    ['$scope','$http',
      function ($scope, $http) 
      {
          $scope.profesores = {};
          
          
            $http.get('index.php?c=docente&a=json').success
            (function(data) 
            {
              $scope.profesores=data;
            })
      }
  ]);

  app.controller
  ('progIngCtrl', 
    ['$scope','$http',
      function ($scope, $http) 
      {
          $scope.materias = {};
          
          
            $http.get('index.php?c=carrera&a=jsonIng').success
            (function(data) 
            {
              $scope.materias=data;
            })
      }
  ]);

  app.controller
  ('matCtrl', 
    ['$scope','$http',
      function ($scope, $http) 
      {
          $scope.datos = {};

            $http.get('index.php?c=materia&a=jsonMateria').success
            (function(data) 
            {
              $scope.datos=data;
            })
      }
  ]);
  


})();