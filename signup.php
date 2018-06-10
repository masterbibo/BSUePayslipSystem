
<?php 
include 'helpers/headertemplate.php';
?>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="admin/register.php" method="post">
     
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

      <hr/>
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
          </div>
          <input type="text" id="idnumber" name="idnumber" class="form-control" placeholder="ID Number">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-key"></i></span>
          </div>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
      </div>

      <hr/>


        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


<?php 
include_once 'helpers/footertemplate.php';
?>