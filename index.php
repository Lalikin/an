<!doctype html>
<html ng-app>
  <head>
  	<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
  </head>
  <body>
    <div>
      <label>Имя:</label>
      <input type="text" ng-model="yourName" placeholder="Введите свое имя">
      <hr>
      <h1>Привет {{yourName}}!</h1>
    </div>
  </body>
</html>