<?php
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
                                                `createddate`, 
                                                `modifiedby`, 
                                                `modifieddate`, 
                                                `isactive`
                                                ) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");  
		$department=$_POST['department'];
		$name = $_POST['name'];
		$email= $_POST['email'];
		$sql->bind_param("sss", $department, $name, $email); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
	} 
?>