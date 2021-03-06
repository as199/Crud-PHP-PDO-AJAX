<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</head>
<body>
  <!--add New User Modal Start -->
  <div class="modal fade" tabindex="-1" id="addNewUserModal" >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New User</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="Enter  First Name" required>
                <div class="invalid-feedback">First name is required!</div>
              </div>
              <div class="col">
                <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Enter  First Name" required>
                <div class="invalid-feedback">Last name is required!</div>
              </div>
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter  E-mail" required>
                <div class="invalid-feedback">E-mail is required!</div>
            </div>
            <div class="mb-3">
                <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Phone" required>
                <div class="invalid-feedback">Phone is required!</div>
            </div>
            <div class="mb-3">
              <input type="submit" value="Add User" class="btn btn-primary btn-block btn-lg" id="add-user-btn" >
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
  <!--add New User Modal End -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">All user in the database</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Add New User</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="clo-lg-12">
        <div id="showAlert">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>