
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
UserName:<input type="text" name="username"><br>
UserEmail:<input type="email" name="useremail"><br>
ContactNumber:<input type="number" name="contactnumber"><br>
DOB:<input type="date" name="DOB"><br>
<input type="submit" name="submit">
</form>

<?php
	
$con = mysqli_connect('localhost', "root", "", "college");
if ($con) {
        echo "database connect";
     }else{
         echo "database Not connect";
	 }
	 // initialize variables
	$UserName = "";
	$UserEmail = "";
	$ContactNumber = "";
	$DOB = "";
	

if (isset($_POST['submit'])) {
	
	    $UserName = $_POST['username'];
        $UserEmail = $_POST['useremail'];
        $ContactNumber = $_POST['contactnumber'];
		$DOB = $_POST['DOB'];
		
		$query = "INSERT INTO 'stud' ('UserName', 'UserEmail', 'ContactNumber', 'DOB') VALUES ('$UserName','$UserEmail','$ContactNumber','$DOB')";
		
		$submit = mysqli_query($con,$query); 
		       if ($submit) {
		           echo "Data  save ";
		        }else{
		         echo "Data  not save ";
		        } 
}



	
	
	
?>
</body>    
</html>