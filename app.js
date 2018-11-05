var app = angular.module('myApp', []);
app.controller('orderCtrl', function($scope) {
	$scope.i=0;
	$scope.clicktab=0;
	$scope.jaf=[{"name":"google","info":"data analytics","url":"https://www.google.co.in/","dec":"1"},
                {"name":"cry","info":"winter intern","url":"https://www.facebook.com/","dec":"2"},
                {"name":"sakaal","info":"consulting","url":"http://abhyudayiitb.org/","dec":"3"},
                {"name":"fest","info":"rnd","url":"http://abhyudayiitb.org/","dec":"4"}
               ];
               
      $scope.data1=[{"posting":"Mumbaui"},
                {"salary":"The Godfather"}
               ];
               
               
               
        $scope.data2=[{"posting":"Mumbaui"},
                {"salary":"The Godfather"}
               ];
               
               
         $scope.data3=[{"posting":"Mumbaui"},
                {"salary":"The Godfather"}
               ];
               
           $scope.data4=[{"posting":"Mumbaui"},
                {"salary":"The Godfather"}
               ];
               
         
               
        $scope.tab=0;
});
