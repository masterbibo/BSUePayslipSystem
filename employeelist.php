<?php 
    $_HeaderTitle = 'Employee List'; 
?> 

<?php include 'helpers/header.php'; ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-success">
              <div class="card-header">
              <button type="button" class="btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> Add Employee</button>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
		</div>
	</div>
<?php include 'helpers/footer.php'; ?>