<?php ob_start();
session_start();?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<<<<<<< HEAD
<?php include "includes/connection.php" ?>
<?php include "includes/function.php" ?>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<?php include "includes/connection.php" ?>
<?php include "includes/function.php" ?>
=======
<<<<<<< HEAD
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
<?php include "includes/connect.php" ?>
<?php include "includes/function.php" ?>
=======
<<<<<<< HEAD

<?php include "includes/function.php" ?>
=======
>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767

<?php 
    
    if (isset($_GET['source'])) {
        
        $source=$_GET['source'];
    }
    else
    {
        $source="";
    }

    switch ($source) 
    {
       
        case 'property-forsale':
             include "includes/property-main.php"; 
            break; 
        case 'property-forrent':
             include "includes/property-main.php"; 
            break;
        case 'property-foreclosure':
             include "includes/property-main.php"; 
            break;
        case 'property-newdevelopment':
             include "includes/property-main.php"; 
            break;
        case 'property-page':
             include "includes/property-page.php"; 
            break;
        case 'loginandregister':
             include "includes/login-register.php"; 
            break;
        case 'propertyadvertise':
             include "includes/propertyadvertise.php"; 
            break;
		case 'property-page':
             include "includes/property-page.php"; 
            break;
        case 'postproperty':
             include "includes/post-property.php"; 
            break;    
        default:
            include "includes/homepage-search.php";
             include "includes/homepage-property.php"; 
             include "includes/homepage-welcome.php"; 
             include "includes/homepage-countarea.php"; 
             include "includes/homepage-buyandsell.php";
        break;
    } 
?>




<?php include "includes/footer.php" ?>
     
      

    

      