(function () 
{
  var app = angular.module('universidadApp', ['angularUtils.directives.dirPagination']);

  app.controller
  ('listadoCtrl', 
    ['$scope','$http', '$log', '$window',
      function ($scope, $http, $log, $window) 
      {
          $scope.profesores = {};

          $scope.ClickMee = function (profe) {
            var url = "http://" + $window.location.host + "/etic/index.php?c=docente&a=perfil&idd="+profe.idDocente;
            $window.location.href = url;
          };
          
          $http.get('index.php?c=docente&a=json').success
          (function(data) 
          {
            $scope.profesores=data;
          });
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
  ('progLicCtrl', 
    ['$scope','$http',
      function ($scope, $http) 
      {
          $scope.materias = {};
          
          
            $http.get('index.php?c=carrera&a=jsonLic').success
            (function(data) 
            {
              $scope.materias=data;
            })
      }
  ]);

  app.controller
  ('progTudawCtrl', 
    ['$scope','$http',
      function ($scope, $http) 
      {
          $scope.materias = {};
          
          
            $http.get('index.php?c=carrera&a=jsonTudaw').success
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


