<?php 
session_start();
include("includes/header.php");
?>
<section id="cta">
<h2>Welcome</h2>
<?php 
if(isset($_SESSION['username'])){
        echo "welcome" . $_SESSION['username'];
}else{
  header("Location: index.php");
     exit();
}
 ?>
<a href="logout.php"><button>Logout</button></a>
</section>
<?php include("includes/footer.php") ?>