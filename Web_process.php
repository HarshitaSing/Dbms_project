<?php
// define variables and set to empty values
if (isset($_POST['submitbtn'])) {
        // btnDelete
    
$name = filter_input(INPUT_POST,'name');
$phone = filter_input(INPUT_POST,'phone');
$emailid = filter_input(INPUT_POST,'emailid');
$passwd = filter_input(INPUT_POST,'passwd');

if(!empty($name){
	if(!empty($phone){
	  if(!empty($emailid){
		  if(!empty($passwd){
			  $host = "localhost:3306";
			  $dbname= "web_project";
			  $dbuser= "root";
			  $dbpass = "";
			  
			  
	
	$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    
    if(mysqli_connect_error()){
		die('connect_error('.mysqli_connect_errno().')'.mysqli_connect_error());
	} 
	else
	{
		$sql = INSERT INTO signup_table(name,phone,email,password) values($name,$phone,$emailid,$passwd);
		
		if($conn -> query($sql)
		{
			echo " new record inserted successfully";
		}
		else{
			echo "error:".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
		  }
	}
}
}
}
?>



















