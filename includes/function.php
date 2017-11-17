<?php



function reg_user()
{
	
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
	try{
    $dbh = new pdo( $dsn,
                    $user,
                    $pass);
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $ex){
    echo 'Connection failed: ' . $ex->getmessage();
}
=======
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
				
				


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
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
			}


}

function login(){
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
	
	try{
    $dbh = new pdo( $dsn,
                    $user,
                    $pass);
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $ex){
    echo 'Connection failed: ' . $ex->getmessage();
}
=======
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
			echo $count;
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
			echo $count;
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
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
	
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

try{
    $dbh = new pdo( $dsn,
                    $user,
                    $pass);
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $ex){
    echo 'Connection failed: ' . $ex->getmessage();
}
	
	if (isset($_POST['post_submit'])) 
=======
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
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
	
<<<<<<< HEAD
<<<<<<< HEAD
	if (isset($_POST['post_submit'])) 
=======
	if (isset($_POST['reg_submit'])) 
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
	if (isset($_POST['reg_submit'])) 
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	{				
		try{
			//Insert User Details
			$stmt = $dbh->prepare("INSERT INTO Property (Title, Type, Price, Description, User_ID) 
									VALUES (:title, :type, :price, :description, :user_id)");
			$stmt->bindParam(':title', $title);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
			$stmt->bindParam(':type', $type);
			$stmt->bindParam(':price', $price);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':user_id',$user_id);
			$title = $_POST['post_title'];
			$type = $_POST['post_type'];
			$price = $_POST['post_price'];
			$description = $_POST['post_description'];
			$user_id = $_SESSION['ID'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
			$stmt->bindParam(':type', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':password', $password);
			$email=$_POST['reg_email'];
			$lastname=$_POST['reg_lname'];
			$firstname=$_POST['reg_fname'];
			$password=$_POST['reg_password'];
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
			$stmt->execute();
			//Check last ID
			$stmt = $dbh->prepare("SELECT LAST_INSERT_ID() FROM Property");
			$stmt->execute();
			$result = $stmt->fetchColumn();
			//Insert Contact Details
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
			$stmt = $dbh->prepare("INSERT INTO Property_Location (Property_ID, Country, Zip, State, City, StreetAddress) 
									VALUES (:property_id, :country, :zip, :state, :city, :streetaddress)");
			$stmt->bindParam(':property_id', $result);
			$stmt->bindParam(':country', $country);
			$stmt->bindParam(':zip', $zip);
			$stmt->bindParam(':state', $state);
			$stmt->bindParam('city', $city);
			$stmt->bindParam(':streetaddress', $route);
			$country = $_POST['post_country'];
			$zip = $_POST['post_zip'];
			$state = $_POST['post_state'];
			$city = $_POST['post_city'];
			$route = $_POST['post_route'];
			$stmt->execute();
			$stmt = $dbh->prepare("INSERT INTO Property_Features (Property_ID, Stories, Bed, Bath, Garage) 
									VALUES (:property_id, :stories, :bed, :bath, :garage)");
			$stmt->bindParam(':property_id', $result);
			$stmt->bindParam(':stories', $stories);
			$stmt->bindParam(':bed', $bed);
			$stmt->bindParam(':bath', $bath);
			$stmt->bindParam(':garage', $garage);
			$stories = $_POST['post_stories'];
			$bed = $_POST['post_bed'];
			$bath = $_POST['post_bath'];
			$garage = $_POST['post_garage'];
			$stmt->execute();
			$stmt = $dbh->prepare("INSERT INTO Property_Size (Property_ID, Land, Floor) 
									VALUES (:property_id, :land, :floor)");
			$stmt->bindParam(':property_id', $result);
			$stmt->bindParam(':land', $land);
			$stmt->bindParam(':floor', $floor);
			$land = $_POST['post_land'];
			$floor = $_POST['post_floor'];
			$stmt->execute();
			echo "Property Posted!";
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
			$stmt = $dbh->prepare("INSERT INTO User_Contact (User_ID, Mobile, Email) 
									VALUES (:user_id, :mobile, :email)");
			$stmt->bindParam(':user_id', $result);
			$stmt->bindParam(':mobile', $mobile);
			$stmt->bindParam(':email', $email);
			$mobile=$_POST['reg_mobile'];
			$stmt->execute();
			echo "Register Successful!";
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
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

<<<<<<< HEAD
<<<<<<< HEAD

function property_list() {
	$type="";
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}
	else {
		$type="";
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$i = "'";
	try{
    $dbh = new pdo( "mysql:host=localhost;dbname=lazzypropertiesdb",
                    $username,
                    $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex){
		echo 'Connection failed: ' . $ex->getmessage();
	}
	if($type=="forsale"){
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM Property_List WHERE Type='a'");
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			$results = $stmt->fetchAll();
			$link = 'index.php?source=property-page';
			foreach($results as $row) {
				
				$desc = htmlentities($row['Description']);
				
				
				echo'<div class="col-sm-6 col-md-4 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="index.php?source=property-page&propId=' . htmlentities($row['Property_ID']) . '" ><img src="assets/img/demo/property-1.jpg"></a>
                            </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html">' .htmlentities($row['Title']) . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Land :</b>' . htmlentities($row['Land']) . 'sqm </span>
									<br/>
									<span class="pull-left"><b> Floor :</b> ' . htmlentities($row['Floor']) . 'sqm </span>
                                    <span class="proerty-price pull-right"> &#8369 ' . htmlentities($row['Price']) . '</span>
									<span class="pull-left"><b> ' . htmlentities($row['StreetAddress']) .', ' . htmlentities($row['City']) . ', ' . htmlentities($row['State']) . ', ' . htmlentities($row['Country']) . '</b> </span>
                                    <p style="display: none;">'. substr($desc,0,50) .' ...</p>
                                <div class="property-icon">
                                <img src="assets/img/icon/bed.png">(' . htmlentities($row['Bed']) . ')|
                                <img src="assets/img/icon/shawer.png">(' . htmlentities($row['Bath']) . ')|
                                <img src="assets/img/icon/cars.png">(' . htmlentities($row['Garage']) . ')
												
                            </div>
                        </div> 
                    </div>
                </div>';
				
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
	else if($type=="forrent"){
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM Property_List WHERE Type='b'");
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			$results = $stmt->fetchAll();
			$link = 'index.php?source=property-page';
			foreach($results as $row) {
				
				$desc = htmlentities($row['Description']);
				
				
				echo'<div class="col-sm-6 col-md-4 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="index.php?source=property-page&propId=' . htmlentities($row['Property_ID']) . '" ><img src="assets/img/demo/property-1.jpg"></a>
                            </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html">' .htmlentities($row['Title']) . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Land :</b>' . htmlentities($row['Land']) . 'sqm </span>
									<br/>
									<span class="pull-left"><b> Floor :</b> ' . htmlentities($row['Floor']) . 'sqm </span>
                                    <span class="proerty-price pull-right"> &#8369 ' . htmlentities($row['Price']) . '</span>
									<span class="pull-left"><b> ' . htmlentities($row['StreetAddress']) .', ' . htmlentities($row['City']) . ', ' . htmlentities($row['State']) . ', ' . htmlentities($row['Country']) . '</b> </span>
                                    <p style="display: none;">'. substr($desc,0,50) .' ...</p>
                                <div class="property-icon">
                                <img src="assets/img/icon/bed.png">(' . htmlentities($row['Bed']) . ')|
                                <img src="assets/img/icon/shawer.png">(' . htmlentities($row['Bath']) . ')|
                                <img src="assets/img/icon/cars.png">(' . htmlentities($row['Garage']) . ')
												
                            </div>
                        </div> 
                    </div>
                </div>';
				
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
	else if($type=="new"){
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM Property_List WHERE Type='c'");
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			$results = $stmt->fetchAll();
			$link = 'index.php?source=property-page';
			foreach($results as $row) {
				
				$desc = htmlentities($row['Description']);
				
				
				echo'<div class="col-sm-6 col-md-4 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="index.php?source=property-page&propId=' . htmlentities($row['Property_ID']) . '" ><img src="assets/img/demo/property-1.jpg"></a>
                            </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html">' .htmlentities($row['Title']) . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Land :</b>' . htmlentities($row['Land']) . 'sqm </span>
									<br/>
									<span class="pull-left"><b> Floor :</b> ' . htmlentities($row['Floor']) . 'sqm </span>
                                    <span class="proerty-price pull-right"> &#8369 ' . htmlentities($row['Price']) . '</span>
									<span class="pull-left"><b> ' . htmlentities($row['StreetAddress']) .', ' . htmlentities($row['City']) . ', ' . htmlentities($row['State']) . ', ' . htmlentities($row['Country']) . '</b> </span>
                                    <p style="display: none;">'. substr($desc,0,50) .' ...</p>
                                <div class="property-icon">
                                <img src="assets/img/icon/bed.png">(' . htmlentities($row['Bed']) . ')|
                                <img src="assets/img/icon/shawer.png">(' . htmlentities($row['Bath']) . ')|
                                <img src="assets/img/icon/cars.png">(' . htmlentities($row['Garage']) . ')
												
                            </div>
                        </div> 
                    </div>
                </div>';
				
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
	else if($type=="commercialland"){
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM Property_List WHERE Type='d'");
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			$results = $stmt->fetchAll();
			$link = 'index.php?source=property-page';
			foreach($results as $row) {
				
				$desc = htmlentities($row['Description']);
				
				
				echo'<div class="col-sm-6 col-md-4 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="index.php?source=property-page&propId=' . htmlentities($row['Property_ID']) . '" ><img src="assets/img/demo/property-1.jpg"></a>
                            </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html">' .htmlentities($row['Title']) . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Land :</b>' . htmlentities($row['Land']) . 'sqm </span>
									<br/>
									<span class="pull-left"><b> Floor :</b> ' . htmlentities($row['Floor']) . 'sqm </span>
                                    <span class="proerty-price pull-right"> &#8369 ' . htmlentities($row['Price']) . '</span>
									<span class="pull-left"><b> ' . htmlentities($row['StreetAddress']) .', ' . htmlentities($row['City']) . ', ' . htmlentities($row['State']) . ', ' . htmlentities($row['Country']) . '</b> </span>
                                    <p style="display: none;">'. substr($desc,0,50) .' ...</p>
                                <div class="property-icon">
                                <img src="assets/img/icon/bed.png">(' . htmlentities($row['Bed']) . ')|
                                <img src="assets/img/icon/shawer.png">(' . htmlentities($row['Bath']) . ')|
                                <img src="assets/img/icon/cars.png">(' . htmlentities($row['Garage']) . ')
												
                            </div>
                        </div> 
                    </div>
                </div>';
				
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
	else {
		
		try{
			//Select User With Same Email && Pass
			$stmt = $dbh->prepare("SELECT * FROM Property_List");
			$stmt->execute();
			$count = (int)$stmt->rowCount();
			$results = $stmt->fetchAll();
			$link = 'index.php?source=property-page';
			foreach($results as $row) {
				
				$desc = htmlentities($row['Description']);
				
				
				echo'<div class="col-sm-6 col-md-4 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="index.php?source=property-page&propId=' . htmlentities($row['Property_ID']) . '" ><img src="assets/img/demo/property-1.jpg"></a>
                            </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html">' .htmlentities($row['Title']) . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Land :</b>' . htmlentities($row['Land']) . 'sqm </span>
									<br/>
									<span class="pull-left"><b> Floor :</b> ' . htmlentities($row['Floor']) . 'sqm </span>
                                    <span class="proerty-price pull-right"> &#8369 ' . htmlentities($row['Price']) . '</span>
									<span class="pull-left"><b> ' . htmlentities($row['StreetAddress']) .', ' . htmlentities($row['City']) . ', ' . htmlentities($row['State']) . ', ' . htmlentities($row['Country']) . '</b> </span>
                                    <p style="display: none;">'. substr($desc,0,50) .' ...</p>
                                <div class="property-icon">
                                <img src="assets/img/icon/bed.png">(' . htmlentities($row['Bed']) . ')|
                                <img src="assets/img/icon/shawer.png">(' . htmlentities($row['Bath']) . ')|
                                <img src="assets/img/icon/cars.png">(' . htmlentities($row['Garage']) . ')
												
                            </div>
                        </div> 
                    </div>
                </div>';
				
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


=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
?>