<?php 
session_start();
?>
<section id="cta">
    <h2>Login form</h2>
    <?php 
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $_dbname = "logins";

    $conn = mysqli_connect($_servername, $_username, $_password, $_dbname);
    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $_username = $_POST['username'];
        $_password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$_username' AND password = '$_password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            $_SESSION['username'] = $_username;
            header("Location: welcome.php");
            exit();
        }else{
            header("Location: index.php");
            exit();
        }
    }
    mysqli_close($conn);
     ?>
     <section id="cta">
					<h2>Login form</h2>
					<form action="login.php" method="POST">
						<input type="text" name="username" placeholder="Enter your username" /> <br>
						<input type="password" name="password" placeholder="Enter your password" /> <br>
						<button type="submit">login</button>
					</form>
				</section>
</section>
<?php include("includes/footer.php"); ?>