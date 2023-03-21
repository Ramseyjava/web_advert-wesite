<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
	// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
        <header >
            <div class="content-wrapper"style="" >
                <h1 style="color:orange;font-size:21px;">ABLE BUDGET SOLUTIONS</h1>
                <nav >
                    <a href="index.php">Home</a>
                    <a href="index.php?page=Products">Products</a>
					
					<a href="index.php?page=login">My Account<a/>
                    <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
                </nav>
				
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
						<span>$num_items_in_cart</span>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;

}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
		<div class="w3-container " style="margin-top:110px;">
        <footer style="text-align:center;">
            <div class="content-wrapper">
                <p>&copy; $year, ABLE BUDGET SOLUTIONS</p>
				<p>Follow us on</p>
				<div class="w3-xlarge">
				<p><a href="#" class="fa fa-facebook" style=" background: #3B5998;color: white;padding:15px;font-size:30px;width:50px;text-align:center;margin:5px 2px;text-decoration:none;"></a>
				   <a href=" https://twitter.com/@Nichola83820455" class="fa fa-twitter w3-circle" style=" background: #55ACEE;color: white;padding:15px;font-size:30px;width:50px;text-align:center;margin:5px 2px;text-decoration:none;"></a>
				   <a href="https://www.instagram.com/nicktech664/" class="fa fa-instagram" style=" background:#f40083;color: white;padding:15px;font-size:30px;width:50px;text-align:center;margin:5px 5px;text-decoration:none;border-radius:14px;"></a>
				   <a href="https://www.linkedin.com/in/nicholas-murimi-684113233" class="fa fa-linkedin" style=" background: #007bb5;color: white;padding:15px;font-size:30px;width:50px;text-align:center;margin:5px 2px;text-decoration:none;"></a>
				   
				</p>
				</div>
            </div>
        </footer>
		</div>
    </body>
</html>
EOT;
}
?>