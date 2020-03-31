
  <?php require_once('config.php'); ?>   
  <?php session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select fname,lname from users where fname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['fname']." ".$row['lname'];

   if(!isset($_SESSION['login_user'])){
      header("location:fake.php");
      die();
   }
?>