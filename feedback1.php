<?php
//session_start();

$dbhost = "localhost";
$dbname = "feedbackdb";
$dbusername = "root";
$dbpass = "";

$mysqli = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);

if(isset($_POST['save']))
{
  $name = $_POST['name'];
  $comment = $_POST['comment'];


  $result = mysqli_query($mysqli, "INSERT INTO feedback (Name, Comment) VALUES ('$name','$comment')");

  if($result)
  {
    /*$_SESSION['message'] = "Thanks for giving your feedback...!";
    header('location: index.html');
    <?php
        if(isset($_SESSION['message']))
        {
          ?>
            <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo $_SESSION['message']; ?>
            </div> 
            <?php
                unset($_SESSION['message']);
        }    
        ?>
        <script src="https://ajax.googleapis/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">*/
    echo '<script>alert("Thanks for giving your feedback...!"); window.location.href = "feedback.php";</script>'; 
  }
  else
  {
    echo '<script>alert("Failed to giving feedback...Try again...!")</script>'; 
  }   
}
?>