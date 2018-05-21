<?php
    include '../helpers/helper.php';
    include '../helpers/crud.php';
    
        $roleid='1';
        $idnumber=$_POST['idnumber'];
        $password= md5($_POST['password']);
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $birthdate=$_POST['birthdate'];
        $gender=$_POST['gender'];
        $departmentid=$_POST['departmentid'];
        $positionid=$_POST['positionid'];
        $address=$_POST['address'];
        $contactnumber=$_POST['phonenumber'];
        $emailadd=$_POST['emailadd'];
        $createdby=$_POST['firstname'] . ' ' . $_POST['lastname'];
        $createddate= date("Y-m-d H:i:s");
  
        $tablename = 'user';
        $tablecolumns = 'roleid, 
                        idnumber, 
                        password, 
                        firstname, 
                        middlename, 
                        lastname, 
                        birthdate, 
                        gender, 
                        departmentid, 
                        positionid, 
                        address, 
                        contactnumber, 
                        emailadd, 
                        createdby, 
                        createddate';
        $columvalues =  "'$roleid           ',
                        '$idnumber         ',
                        '$password         ',
                        '$firstname        ',
                        '$middlename       ',
                        '$lastname         ',
                        '$birthdate        ',
                        '$gender           ',
                        '$departmentid     ',
                        '$positionid       ',
                        '$address          ',
                        '$contactnumber    ',
                        '$emailadd         ',
                        '$createdby        ',
                        '$createddate      '
                        ";

        $result = _saveData($tablename,$tablecolumns,$columvalues);
          
      if($result['data']) {
            popUp("success","Added Successfully: " . $result['count']);
            //header ('location:../signin.php');
      } else {
            popUp("error","Problem in Adding New Record");
      }
?>