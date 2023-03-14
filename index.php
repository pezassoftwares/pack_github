<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Collection Form.</title>

    <!-- Template Main CSS File -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/w3.css" rel="stylesheet" >

</head>
<body>

<header class="head">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
        <a class="navbar-brand" href="index.php">BrandName</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="index.php">Home
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
        </ul>
        
          <!--  <button class="btn btn-secondary my-2 my-sm-0" id="logout_button" type="submit">Logout</button> -->
        
        </div>
  </div>
</nav>
</header>

<section class="form-section">

<div class="container">
<?php if(isset($_GET['error'])): ?>
		<div class="w3-panel w3-red">
  			<p><?php echo $_GET['error']; ?></p>
		</div> 	
	<?php endif; ?>
	<?php if(isset($_GET['success'])): ?>
		<div class="w3-panel w3-green">
  			<p><?php echo $_GET['success']; ?></p>
		</div> 	
	<?php endif; ?>
    <form action="generate_excel.php" method="post" id="export-form">
            <input type="submit" value="Download to excel" id="loginbutton" name="ExportType" />
        </form>
    <form method="POST" action="customer_submission.php">
    <fieldset>
        <legend>Customer Data Collection Form</legend>
     
        <div class="form-group">
        <label for="Customer Name">Customer Name</label>
        <input type="text" class="form-control" id="customerName" name="customerName" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>

        <div class="form-group">
        <label for="Customer Email">Customer Email</label>
        <input type="email" class="form-control" id="customerEmail" placeholder="Email" name="customerEmail" required>
        </div>

        <div class="form-group">
        <label for="Customer Mobile">Customer Mobile</label>
        <input type="tel" pattern="[0-9]{10}" required title="Please enter a 10-digit mobile number" class="form-control" id="customerMobile" placeholder="Mobile" name="customerMobile">
        </div>

        <div class="form-group">
        <label for="Customer Business">Business Name</label>
        <input type="text" class="form-control" id="customerBusiness" placeholder="Business Name" name="customerBusiness" required>
        </div>

        <div class="form-group">
        <label for="Customer City">Business City</label>
        <input type="text" class="form-control" id="customerCity" placeholder="Business City" name="customerCity" required>
        </div>

        <div class="form-group">
        <label for="Customer State">Business State</label>
        <input type="text" class="form-control" id="customerState" placeholder="Business State" name="customerState" required>
        </div>

        <div class="form-group">
        <label for="Customer Type">Customer Type</label>
        <select class="form-select" name="customerType" id="customerType" required>
            <option value="" disabled selected>Select Customer Type</option>
            <option value="retailer">Retailer/Shopkepper</option>
            <option value="distributor">Distributor</option>
            <option value="manufacturer">Manufacturer</option>   
        </select>
        </div>
       
        <div class="form-group">
        <label for="customerAddress">Address or Message</label>
        <textarea class="form-control" id="CustomerAddress"  name="CustomerAddress" rows="3"></textarea>
        </div>

    
        <button type="submit" id="form_submit" class="btn btn-primary btn-space">Submit</button>
        
    </fieldset>
    </form>
</div>
</section>
    
</body>
<script type="text/javascript">
$(document).ready(function() {
jQuery('#Export to excel').bind("click", function() {
var target = $(this).attr('id');
switch(target) {
  case 'Download to excel' :
  $('#hidden-type').val(target);
  //alert($('#hidden-type').val());
  $('#export-form').submit();
  break
}
});
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</html>