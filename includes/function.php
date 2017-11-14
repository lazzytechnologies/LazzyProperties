<?php



function reg_user()
{
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	try{
    $dbh = new pdo( "mysql:host=localhost;dbname=lazzypropertiesdb",
                    $username,
                    $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex){
		echo 'Connection failed: ' . $ex->getmessage();
	}
	
	if (isset($_POST['reg_submit'])) 
			{				
				try{
					//Insert User Details
					$stmt = $dbh->prepare("INSERT INTO User (email, first_name, last_name, password) 
											VALUES (:email, :firstname, :lastname, :password)");
					$stmt->bindParam(':email', $email);
					$stmt->bindParam(':firstname', $firstname);
					$stmt->bindParam(':lastname', $lastname);
					$stmt->bindParam(':password', $password);
					$email=$_POST['reg_email'];
					$lastname=$_POST['reg_lname'];
					$firstname=$_POST['reg_fname'];
					$password=$_POST['reg_password'];
					$stmt->execute();
					//Check last ID
					$stmt = $dbh->prepare("SELECT LAST_INSERT_ID() FROM User");
					$stmt->execute();
					$result = $stmt->fetchColumn();
					//Insert Contact Details
					$stmt = $dbh->prepare("INSERT INTO User_Contact (User_ID, Mobile, Email) 
											VALUES (:user_id, :mobile, :email)");
					$stmt->bindParam(':user_id', $result);
					$stmt->bindParam(':mobile', $mobile);
					$stmt->bindParam(':email', $email);
					$mobile=$_POST['reg_mobile'];
					$stmt->execute();
					echo "Register Successful!";
					//echo "<script> location.href = 'index.php' </script>";
					//echo "Error Code: " . $stmt->errorCode();
				}
				catch(PDOException $e){
					if($e->getCode() === '23000')
					{
						echo "Email already taken.";
					}
					else
					{
					echo "Error: " . $e->getMessage();
					}
				}
				
				


				/**$firstname=mysqli_real_escape_string($connection,$firstname);
				$lastname=mysqli_real_escape_string($connection,$lastname);
				$username=mysqli_real_escape_string($connection,$username);
				$password=mysqli_real_escape_string($connection,$password);
				$email=mysqli_real_escape_string($connection,$email);
				$role=mysqli_real_escape_string($connection,$role);
				$gender=mysqli_real_escape_string($connection,$gender);
	
				$insert_user_query="INSERT INTO user (u_username, u_password, u_email, u_type) 
										VALUES(
										    '$username',
										    '$password',
										    '$email',
										    '$role'
										  )";
				if(mysqli_query($connection,$insert_user_query))
				{
					
					$id=mysqli_insert_id($connection);				
					$insert_userdetails_query="INSERT INTO user_details (u_id, u_lname, u_fname, u_gender) 
											VALUES(
											    '$id',
											    '$lastname',
											    '$firstname',
											    '$gender'
											  )";
					$insert_userdetails_result=mysqli_query($connection,$insert_userdetails_query);
					if(!$insert_userdetails_result)
					{
						 die("no result".mysqli_error($connection));
					}
					else
					{
						$_SESSION['u_id']=$id;
						$_SESSION['u_username']=$username;
						$_SESSION['u_role']=$role;
						if($role=="employer")
						{
							echo"<script>
									alert('Registration Complete!');
									location.href = 'index.php';
							</script>";
						}
						else
						{
							echo"<script>
									alert('Registration Complete!');
									location.href = 'index-candidate.php?source=submitprofile';
							</script>";
						}
							session_start();
					}
				}
				else
				{
					die("no result".mysqli_error($connection));
				}**/
			}


}

function login(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	try{
    $dbh = new pdo( "mysql:host=localhost;dbname=lazzypropertiesdb",
                    $username,
                    $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex){
		echo 'Connection failed: ' . $ex->getmessage();
	}
	
	//global $dbh
	if (isset($_POST['login_submit'])) 
	{			
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM User WHERE Email=:email && Password=:password");
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':password', $password);
			$email=$_POST['login_email'];
			$password=$_POST['login_password'];
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			echo $count;
			if($count == 1 ){
				echo "Log In Successful!";
				$result = $stmt->fetch(PDO::FETCH_OBJ);
				$_SESSION['ID'] = $result->User_ID;
				$_SESSION['Email'] = $result->Email;
				$_SESSION['FName'] = $result->First_Name;
				$_SESSION['LName'] = $result->Last_Name;
			}
			else if($count > 1){
				echo "Error occured. Please contact the administrator.";
			}
			else {
				echo "Incorrect email or password.";
			}
			// Fetch data from query
			
			//Start PHP Session
			//$_SESSION['ID'] = $result->
			//echo "Log In Successful!";
			//echo "<script> location.href = 'index.php' </script>";
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
}

function post_property(){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	try{
    $dbh = new pdo( "mysql:host=localhost;dbname=lazzypropertiesdb",
                    $username,
                    $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex){
		echo 'Connection failed: ' . $ex->getmessage();
	}
	
	if (isset($_POST['reg_submit'])) 
	{				
		try{
			//Insert User Details
			$stmt = $dbh->prepare("INSERT INTO Property (Title, Type, Price, Description, User_ID) 
									VALUES (:title, :type, :price, :description, :user_id)");
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':type', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':password', $password);
			$email=$_POST['reg_email'];
			$lastname=$_POST['reg_lname'];
			$firstname=$_POST['reg_fname'];
			$password=$_POST['reg_password'];
			$stmt->execute();
			//Check last ID
			$stmt = $dbh->prepare("SELECT LAST_INSERT_ID() FROM Property");
			$stmt->execute();
			$result = $stmt->fetchColumn();
			//Insert Contact Details
			$stmt = $dbh->prepare("INSERT INTO User_Contact (User_ID, Mobile, Email) 
									VALUES (:user_id, :mobile, :email)");
			$stmt->bindParam(':user_id', $result);
			$stmt->bindParam(':mobile', $mobile);
			$stmt->bindParam(':email', $email);
			$mobile=$_POST['reg_mobile'];
			$stmt->execute();
			echo "Register Successful!";
			//echo "<script> location.href = 'index.php' </script>";
			//echo "Error Code: " . $stmt->errorCode();
		}
		catch(PDOException $e){
			if($e->getCode() === '23000')
			{
				echo "Email already taken.";
			}
			else
			{
			echo "Error: " . $e->getMessage();
			}
		}
	}
}

?>