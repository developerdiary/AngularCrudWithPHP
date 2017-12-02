<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Angular JS CRUD Application with PHP
  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
  <script src="app.js"></script>
</head>

<body ng-app="ngCrud" ng-controller="controller" ng-init="show_data()">
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>AngularJs CRUD Application with PHP / MYSQL</h4>
      </div>
      <div class="col-md-6">
        <a href="javascript:void(0);" class="btn btn-success pull-right" data-toggle="modal" data-target="#edit">Add New Entry</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">        
        <div class="table-responsive">
          <input type="hidden" ng-model="id">
          <table id="mytable" class="table table-bordred table-striped">
            <thead>
            
              <th>First Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Edit</th>

              <th>Delete</th>
            </thead>
            <tbody>

              <tr ng-repeat="x in names">
                <td>{{x.name}}</td>
                <td>{{x.email}}</td>
                <td>{{x.address}}</td> 
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Edit">
                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ng-click="update_data(x)">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete">
                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ng-click="show_confirm(x.id)" >
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </p>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>
    </div>
  </div>


  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input class="form-control " type="text" name="name" ng-model="name" placeholder="Mohsin">
          </div>
          <div class="form-group">

            <input class="form-control " type="email" name="email" ng-model="email" placeholder="ikhlaque.maner@gmail.com">
          </div>
          <div class="form-group">
            <textarea rows="2" class="form-control" name="address"  ng-model="address" placeholder="D xx/xxx Street # 11 xxx Thane Mumbra"></textarea>


          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;" ng-click="action_on_data()">
            <span class="glyphicon glyphicon-ok-sign"></span>Update </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>



  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
        </div>
        <div class="modal-body">

          <div class="alert alert-danger">
            <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-success" ng-click="delete_data()">
            <span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> No</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</body>

</html>