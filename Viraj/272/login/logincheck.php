<?php
  extract($_POST);
  //check if username and password is left blank 
  if(!$username & !$password){
    leftBlank();
    die();
  }  
  //check if sign up is occuring


  
  if(isset($login)){
    

    $host = 'robotsstore.co';
      $user='sidharth11';
      $pass = 'sidharth11';
      $db='RobotsStore';
   
      $con = mysqli_connect($host,$user,$pass,$db);
      if(!$con){
        echo '<p align="center">Connection to the database could not be made.<br>Please try after some time.</p>';
      }
      else{
        
        $em=$_POST[email];
        $sql = "SELECT `password` FROM `marketusers` WHERE 'email'='".$em."'";

        $query = mysqli_query($con, $sql);
        $v = mysqli_num_rows($query);
        
        if(!$v){
               echo 'inside no results';
	       echo '<p align="center">No records found. Invalid username.</p>';
        }
        else{
             
             $itt=mysqli_fetch_assoc($query);
             $psw = $itt['password'];
             
             if(strcmp($psw, $_POST[password]) == 0){
                 header('Location: http://www.robotsstore.co/272/272/');
                 echo '<p align="center">Login Success.</p>';
             }
             else{
                  
                  echo '<p align="center">Login Failure.</p>';
             }
        }  
     }
  }
?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/584b0a8ee2def07b70ab53ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>