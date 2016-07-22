@extends('layouts.app')


@section ('head')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.
                    </div>

                    <a href="/feedback">Click Me</a>
                </div>
            </div>
        </div>

        <div class="row" ng-app="meuApp">
            <div class="col-md-10 col-md-offset-1">

            <ul ng-controller="mainController">
                <li ng-repeat="user in users">@{{user.name}}</li>
            </ul>
        


            </div>       
        </div>
    </div>

    <script>
        angular.module('meuApp', [])
            .controller('mainController', ['$scope', function($scope){

                $scope.users = [];

                angular.element(document).ready(function () {
                    
                    var pusher = new Pusher('101c33113ff56a0ec66e', {
                      encrypted: true
                    });

                    pusher.subscribe('teste')
                          .bind('App\\Events\\UserHasRegistered', $scope.addUser);

                });

                $scope.addUser = function(user){
                    $scope.$apply(function(){
                            $scope.users.push(user);
                    });
                }

            }]);
    </script>
@endsection
