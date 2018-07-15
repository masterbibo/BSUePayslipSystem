<?php 
  $_HeaderTitle = 'Employee List'; 

  include 'helpers/header.php';
  include 'helpers/helper.php';
  include 'helpers/crud.php';
  
  $users_employee = _getAllData('user');
  $empdataList = array(); // empty array

  if ($users_employee != null && $users_employee['count'] != 0){       
      $empdataList[] = $users_employee['data'];
  }
  else{
      $empdataList[] = null;
  }
//  var_dump ($users_employee);
?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-success">
              <div class="card-header">
              <button type="button" class="btn btn-xs btn-default pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Employee</button>
              </div>
              <div class="card-body">
                <table class="table table-responsive table-bordered table-striped table-hover table-condensed jqdatatable">
                <thead>
                   <th>
                   Action
                  </th>
                  <th>
                    ID #
                  </th>
                  <th>
                    Role
                  </th>
                  <th>
                    Full Name
                  </th>
                  <th>
                    Department
                  </th>
                  <th>
                    Position
                  </th>
                  <th>
                    Gender
                  </th>
                  <th>
                    Created By
                  </th>
                  <th>
                    Created Date
                  </th>
                </thead>
                <tbody>
                  <?php 
                  //DO LOOP HERE
                  if ($empdataList == null){
                    echo '<tr><td colspan="8" class="text-center">-- No Records Found! --</td></tr>';
                  }
                  else{
                    foreach ($empdataList as $empList) {
                      
                      echo '<tr>';
                      echo '<td class="btn-group"><button type="button" class="btn btn-sm btn-primary" name="EditEmployee" id="EditEmployee" value="'. $empList["id"].'">Edit</button><button type="button" class="btn btn-sm btn-danger" name="DeleteEmployee" id="DeleteEmployee" value="'. $empList["id"].'">Delete</button></td>';
                      echo '<td>'. $empList["idnumber"] .'</td>';
                      echo '<td>'. getRoleName($empList['roleid']) .'</td>';
                      echo '<td>'. formatFullName('lfm',$empList['firstname'],$empList['middlename'],$empList['lastname']) .'</td>';
                      echo '<td>'. getDepartmentName($empList['departmentid']) .'</td>';
                      echo '<td>'. getPositionName($empList['positionid']) .'</td>';
                      echo '<td>'. $empList['gender'] .'</td>';
                      echo '<td>'. $empList['createdby'] .'</td>';
                      echo '<td>'. $empList['createddate'] .'</td>';
                      echo '</tr>';
                    }
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
		</div>
  </div>
  
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">        
        <h4 class="modal-title">Add New Employee</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
          </div>
          <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
          </div>
          <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middle Name">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
          </div>
          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
          </div>
          <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-transgender"></i></span>
          </div>
          <select id="gender" name="gender" class="form-control dropdown">
            <option value="">[Select Gender]</option>  
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-list-ul"></i></span>
          </div>
          <select id="departmentid" name="departmentid" class="form-control dropdown">
            <option value="">[Select Department]</option> 
            <option value="1">1</option> 

        </select>
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-list"></i></span>
          </div>
          <select id="positionid" name="positionid" class="form-control dropdown">
            <option value="">[Select Position]</option>  
            <option value="1">1</option> 
        </select>
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-address-card"></i></span>
          </div>
          <textarea id="address" name="address" class="textarea form-control" cols="1" rows="3" placeholder="Home Address"></textarea>
      </div>      

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
          </div>
          <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Mobile Number"/>
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
          </div>
          <input type="email" id="emailadd" name="emailadd" class="form-control" placeholder="Email Address"/>
      </div>

      </div>
      <div class="modal-footer">
        <div class="btn-group">
        <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'helpers/footer.php'; ?>