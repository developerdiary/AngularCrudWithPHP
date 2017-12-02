# AngularCrudWithPHP


## Use following library yo create this application

* <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
* <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
* <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
* <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>


### app.js

```Javascript

var app = angular.module('ngCrud', []);

app.controller('controller', function($scope, $http){

    $scope.btnName = "insert";

    $scope.action_on_data = function(){
        if($scope.name == null){
            alert("Enter your name");
        } else if ($scope.email == null ){
            alert("Enter your email id");
        } else if ($scope.address == null){
            alert("Enter your address");
        } else {
            
            $http.post(
                "insert.php", {
                    'name': $scope.name,
                    'email': $scope.email,
                    'address': $scope.address,
                    'btnName': $scope.btnName,
                    'id': $scope.id
                }
            ).then(function(response) {
                alert(response.data);
                $scope.name = null;
                $scope.email = null;
                $scope.address = null;
                $scope.btnName = "insert";
                $scope.show_data();
            });

        }
    }

    $scope.update_data = function(data){
        $scope.id = data.id;
        $scope.name = data.name;
        $scope.email = data.email;
        $scope.address = data.address;
        $scope.btnName = "update";
    }

    $scope.show_data = function(){
        $http.get("display.php") 
        .then(function(response) {
            $scope.names = response.data;
        });
    }

    $scope.show_confirm = function(id){
        $scope.id = id;
    }

    $scope.delete_data = function(){

        $http.post('delete.php',{
            'id': $scope.id
        })
        .then(function(response){   
            angular.element(document.querySelector('#delete')).modal('hide');        
            $scope.show_data();
        });
    }
});


```
