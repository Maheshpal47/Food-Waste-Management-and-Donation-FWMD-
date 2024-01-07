<?php
	    
	    error_reporting(0);
    // Initialize a database connection
    $db = mysqli_connect("localhost:3308", "root", "", "ngore");

    if(!$db)
    {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }



    //ngo  list 
    $q1 = "SELECT * FROM ngoregister";
    $q1re = mysqli_query($db, $q1);


    if(isset($_REQUEST['submit']))
{

		$Name =mysqli_real_escape_string($db,$_REQUEST['Name']);
		$Head =mysqli_real_escape_string($db,$_REQUEST['Head']);
		$Contact = mysqli_real_escape_string($db,$_REQUEST['Contact']);
		$Email = mysqli_real_escape_string($db,$_REQUEST['Email']);
		$Address = mysqli_real_escape_string($db,$_REQUEST['Address']);
		$Pincode = mysqli_real_escape_string($db,$_REQUEST['Pincode']);
		$files = $_FILES['File'];
      	$usern = mysqli_real_escape_string($db,$_REQUEST['Username']);
      	$password_1 =mysqli_real_escape_string($db,$_REQUEST['password_1']);
      	$password_2 =mysqli_real_escape_string($db,$_REQUEST['password_2']);

      	$filename = $files['name'];
      	$filepath = $files['tmp_name'];
      	$filerror = $files['error'];

      	if ($filerror ==0)
      	 {
      		$destfile = 'upload/'.$filename;
      		move_uploaded_file($filepath, $destfile); 
      	}

		


      		//register validation


      		$querry = mysqli_query($db,"SELECT *FROM ngoregister WHERE Username ='$usern'");
      		if(mysqli_num_rows($querry)>0)
      		{
      			echo "<script>alert('Username already exist');</script>";
      		}
      		else
      		{
      			if($password_1=== $password_2)
	      		{
	      			

	      			$insertquery="INSERT INTO ngoregister(Name, Head, Contact, Email, Address, Pincode,photo, Username, Password,status) VALUES ('$Name', '$Head', '$Contact', '$Email', '$Address', '$Pincode','$destfile', '$usern', '$password_1','pending')";

	      			 mysqli_query($db,$insertquery);


	      			  echo '<script type = "text/javascript">';
					    echo 'alert("registered successfully!!!Please wait for Admin approval,after that you can login");';
					    echo 'window.location.href = "home_page.php"';
					    echo '</script>';


	      		}
	      		else
	      		{
	      			echo "<script>alert('password not matching');</script>" ;
	      		}

      		}
      	
    }


    //login validation
    session_start();
	
        if(isset($_REQUEST['log_user']))  
    {
    	$usern = mysqli_real_escape_string($db,$_REQUEST['username']);
    	$password_1 = mysqli_real_escape_string($db,$_REQUEST['password']);
    	
    	$querry = mysqli_query($db,"SELECT *FROM ngoregister WHERE Username ='$usern' AND Password='$password_1'");
    	$row = mysqli_fetch_array($querry);
    	$status =$row['status'];

    	$querry1 = mysqli_query($db,"SELECT *FROM ngoregister WHERE Username ='$usern' AND Password='$password_1'");

      		if(mysqli_num_rows($querry1)>0)

      		{	
      			$_SESSION['ngou'] = $usern;
      			if ($status=="approved") 
      			{
      				header("location: NGO_home.php");

      			echo "<script>alert('login successfully');</script>";

      			
      			}
      		}
      		else
      		{	

      			echo "<script>alert('login failed');</script> ";
      		}

  		  }






  		  // approve / denny

  		  if(isset($_POST['approve'])){
    $id = $_POST['id'];

    $select = "UPDATE ngoregister SET status = 'approved' WHERE id = '$id'";
    $result = mysqli_query($db, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "ngo_admin.php"';
    echo '</script>';
}

if(isset($_POST['deny'])){
    $id = $_POST['id'];

    $select = "DELETE FROM ngoregister WHERE id = '$id'";
    $result = mysqli_query($db, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "ngo_admin.php"';
    echo '</script>';
}





  ?>







