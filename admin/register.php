<?php
    include '../helpers/helper.php';

	if (isset($_POST['submit'])) {
		require_once("config.php");
        $sql = $conn->prepare("INSERT INTO `user`( 
                                                `roleid`, 
                                                `idnumber`, 
                                                `password`, 
                                                `firstname`, 
                                                `middlename`, 
                                                `lastname`, 
                                                `birthdate`, 
                                                `gender`, 
                                                `departmentid`, 
                                                `positionid`, 
                                                `address`, 
                                                `contactnumber`, 
                                                `emailadd`, 
                                                `createdby`, 
                                                `createddate`
                                                ) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");  
                                
		$roleid=$_POST['roleid'];
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
        $contactnumber=$_POST['contactnumber'];
        $emailadd=$_POST['emailadd'];
        $createdby=$_POST['firstname'] . ' ' . $_POST['lastname'];
        $createddate= date("Y-m-d H:i:s");

        $sql->bind_param($roleid,
                        $idnumber,
                        $password,
                        $firstname,
                        $middlename,
                        $lastname,
                        $birthdate,
                        $gender,
                        $departmentid,
                        $positionid,
                        $address,
                        $contactnumber,
                        $emailadd,
                        $createdby,
                        $createddate
                        ); 

		if($sql->execute()) {
            echo 'Added Successfully!';
			//popUp("success","Added Successfully");
		} else {
            echo 'Problem in Adding New Record';
			//popUp("error","Problem in Adding New Record");
		}
		$sql->close();   
        $conn->close();
        
        header ('location:signup.php');

	} 
?>