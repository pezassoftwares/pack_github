<?php include 'db.php'; ?>
<?php
	
	if(!empty($_POST['customerName']) && !empty($_POST['customerEmail']) && !empty($_POST['customerMobile']) && !empty($_POST['customerBusiness']) && !empty($_POST['customerCity']) && !empty($_POST['customerState']) && !empty($_POST['customerType']) && !empty($_POST['CustomerAddress'])){
		$customer_Name = mysqli_real_escape_string($conn, $_POST['customerName']);
		$customer_Email = mysqli_real_escape_string($conn, $_POST['customerEmail']);
		$customer_Mobile = mysqli_real_escape_string($conn, $_POST['customerMobile']);
		$customer_Business = mysqli_real_escape_string($conn, $_POST['customerBusiness']);
		$customer_City = mysqli_real_escape_string($conn, $_POST['customerCity']);
		$customer_State = mysqli_real_escape_string($conn, $_POST['customerState']);
		$customer_Type = mysqli_real_escape_string($conn, $_POST['customerType']);
		$customer_Address = mysqli_real_escape_string($conn, $_POST['CustomerAddress']);
		

		$query = "INSERT IGNORE INTO customer_data(customer_name, customer_email, customer_mobile, customer_business, customer_city, customer_state, customer_type, customer_address) VALUES('$customer_Name', '$customer_Email','$customer_Mobile','$customer_Business','$customer_City','$customer_State','$customer_Type','$customer_Address')";

		if(!mysqli_query($conn, $query)){
			
			die(mysqli_error($conn));
	
		} else {
			header("Location: index.php?success=Message%20Added");
		}

	} else {
		header("Location: index.php?error=Please%20Fill%20In%20All%20Fields");
	}



