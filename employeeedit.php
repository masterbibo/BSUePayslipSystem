<?php 
  $_HeaderTitle = 'Employee List'; 

  include 'helpers/header.php';
  include 'helpers/helper.php';
  include 'helpers/crud.php';
  

  if (isset($_GET['id'])) {
       //== GET EMPLOYEE LIST ==
        $users_employee = _getAllDataByParam('user','id=' . $_GET['id']);
        var_dump($users_employee);
        $empdataList = array(); // empty array
        if ($users_employee != null && $users_employee['count'] != 0){       
            $empdataList = $users_employee['data'];
        }
        else{
            $empdataList = null;
        }
  }
  else{
      
  }


//  var_dump ($users_employee);
?>
    <!-- Main content -->
  
    <div class="content">
      <div class="container-fluid">
        <div class="card card-success">
              <div class="card-header">
                <span>Edit Employee</span>
              </div>
              <div class="card-body">
                <?php 
                //Load User Information
                    echo '
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    </div>
                    <input type="text" id="idnumber" name="idnumber" value="'. $empdataList["idnumber"] .'" class="form-control" placeholder="ID Number">
                </div>
               
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" id="firstname" name="firstname" value="'. $empdataList["firstname"] .'" class="form-control" placeholder="First Name">
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" id="middlename" name="middlename" value="'. $empdataList["middlename"] .'" class="form-control" placeholder="Middle Name">
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" id="lastname" name="lastname" value="'. $empdataList["lastname"] .'" class="form-control" placeholder="Last Name">
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="text" id="birthdate" autocomplete="off" value="'. $empdataList["birthdate"] .'" name="birthdate" class="form-control" placeholder="Birthdate">
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-transgender"></i></span>
                    </div>
                    <select id="gender" name="gender" class="form-control dropdown">
                      <option value="">[Select Gender]</option>  
                      <option '. ($empdataList["gender"] == "Male") ? "selected" : ""  .' value="Male">Male</option>
                      <option '. ($empdataList["gender"] == "Female") ? "selected" : ""  .' value="Female">Female</option>
                  </select>
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-list-ul"></i></span>
                    </div>
                    <select id="departmentid" name="departmentid" class="form-control dropdown">
                      <option value="">[Select Department]</option> 
                      <option value="1" selected>1</option> 
          
                  </select>
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-list"></i></span>
                    </div>
                    <select id="positionid" name="positionid" class="form-control dropdown">
                      <option value="">[Select Position]</option>  
                      <option value="1" selected>1</option> 
                  </select>
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-address-card"></i></span>
                    </div>
                    <textarea id="address" name="address" class="textarea form-control" cols="1" rows="3" placeholder="Home Address">'. $empdataList["address"] .'</textarea>
                </div>      
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" id="phonenumber" name="phonenumber" value="'. $empdataList["phonenumber"] .'" class="form-control" placeholder="Mobile Number"/>
                </div>
          
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="email" id="emailadd" name="emailadd" value="'. $empdataList["emailadd"] .'" class="form-control" placeholder="Email Address"/>
                </div>
                    ';

                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
		</div>
  </div>

<?php include 'helpers/footer.php'; ?>
<?php 
//===SAVE NEW EMPLOYEE=====
// 
//if (ISSET($_POST["btnSubmit"])){
//   $roleid='1';
//   $idnumber=$_POST['idnumber'];
//   //Passwordformat: idnumber + lastname + birthdate(mmddyy)
//   $password= md5($_POST['lastname'] . $_POST['idnumber']);
//   $firstname=$_POST['firstname'];
//   $middlename=$_POST['middlename'];
//   $lastname=$_POST['lastname'];
//   $birthdate=$_POST['birthdate'];
//   $gender=$_POST['gender'];
//   $departmentid=$_POST['departmentid'];
//   $positionid=$_POST['positionid'];
//   $address=$_POST['address'];
//   $contactnumber=$_POST['phonenumber'];
//   $emailadd=$_POST['emailadd'];
//   $createdby= formatFullName('fml',$_POST['firstname'],$_POST['middlename'],$_POST['lastname']);
//   $createddate= date("Y-m-d H:i:s");
//   $isactive = 1;

//   $tablename = 'user';
//   $tablecolumns = 'roleid, 
//                   idnumber, 
//                   password, 
//                   firstname, 
//                   middlename, 
//                   lastname, 
//                   birthdate, 
//                   gender, 
//                   departmentid, 
//                   positionid, 
//                   address, 
//                   contactnumber, 
//                   emailadd, 
//                   createdby, 
//                   createddate';
//   $columvalues =  "'$roleid           ',
//                   '$idnumber         ',
//                   '$password         ',
//                   '$firstname        ',
//                   '$middlename       ',
//                   '$lastname         ',
//                   '$birthdate        ',
//                   '$gender           ',
//                   '$departmentid     ',
//                   '$positionid       ',
//                   '$address          ',
//                   '$contactnumber    ',
//                   '$emailadd         ',
//                   '$createdby        ',
//                   '$createddate      '
//                   ";

//   $result = _saveData($tablename,$tablecolumns,$columvalues);
// if($result['data']) { 
//   echo (popUp("success","Saved", "(" . $result['count'] . ") Record Saved!","employeelist.php"));
// } else {  
//   echo (popUp("error","", "Problem in Adding New Record.",""));
// }
// }

// //===EDIT EMPLOYEE=====

// //===UPDATE EMPLOYEE=====

?>