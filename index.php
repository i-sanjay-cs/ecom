<!DOCTYPE html>
<html>

<style>


body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

		body{
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			font-family: 'Jost', sans-serif;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
		}
		header{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 70px;
			background-color: #fff;
			padding: 0 20px;
			width: 100%;
			box-shadow: 0px 5px 5px #888888;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 999;
		}
		.logo{
			font-size: 3em;
			font-weight: bold;
			color: #573b8a;
			text-decoration: none;
		}
</style>

<head>

	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<h1 class="logo">E-Commerce</h1>
	</header>
	<?php
    // Connect to database
	$servername = "sql307.byetcluster.com";
	$username = "epiz_34110193";
	$password = "ljR08LHCWVYZa";
	$dbname = "epiz_34110193_ecommerce";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	// Handle sign up form submission
	if (isset($_GET['signup'])) {
	    $username = $_GET['txt'];
	    $email = $_GET['email'];
	    $password = $_GET['pswd'];

	    // Insert data into database
	    $sql = "INSERT INTO registration (username, email, password)
	            VALUES ('$username', '$email', '$password')";

	    if (mysqli_query($conn, $sql)) {
	        echo '<script>alert("Sign up successful");</script>';
	    } else {
	        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
	    }
	}

	if (isset($_GET['login'])) {
	    if (isset($_GET['txt'])) {
	        $username = $_GET['txt'];
	    }
	    if (isset($_GET['pswd'])) {
	        $password = $_GET['pswd'];
	    }
	    // Check if username and password exist in database
	    $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
	    $result = mysqli_query($conn, $sql);
	    $count = mysqli_num_rows($result);

	    if ($count >= 1) {
	        echo '<script>alert("Login successful");</script>';
	        header("Location: products.php");
	        exit();
	    } else {
	        echo '<script>alert("Login failed. Invalid username or password");</script>';
	    }
	}

    // Close database connection
    mysqli_close($conn);
?>

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form method="GET">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="txt" placeholder="User name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button type="submit" name="signup">Sign up</button>
        </form>
    </div>

	<div class="login">
	    <form method="GET">
	        <label for="chk" aria-hidden="true">Login</label>
	        <input type="text" name="txt" placeholder="Username" required="">
	        <input type="password" name="pswd" placeholder="Password" required="">
	        <button type="submit" name="login">Login</button>
	    </form>
	</div>
</div>

</body>
</html>