<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>
   <?php session_start();?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          

        	<?php 
	        	if(isset($_SESSION['user'])) { 
	          		echo "Welcome " . $_SESSION['user'] ." to the homepage!";
	          	}else {
	          		// echo "You have no permission to go to these files!";
	          		header ("Location: login.php");
	          	}

	          	/* SIR VAN'S SHORTER VERSION:

	          	if(!isset($_SESSION['user'])) {
	          		header("Location: login.php");
	          	}else {
					echo "WELCOME HOME!"; 
	          	}
	          
	          	*/
          	?>
          

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>