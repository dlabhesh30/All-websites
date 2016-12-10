<?php
  extract($_POST);
  //check if username and password is left blank 
  if(!$uname & !$password){
    leftBlank();
    die();
  }  
  //check if sign up is occuring


  if(isset($Submit)){

    if(!$name || !$company || !$email || !$password || !$address || !$country || !$city || !$code || !$number){
      echo '<p align="center">';
      echo "You have not filled all the details.<br>Please fill all the fields.</p>";
    }

    else{

      $host = 'robotsstore.co';
      $user='sidharth11';
      $pass = 'sidharth11';
      $db='RobotsStore';
      $con = mysqli_connect($host,$user,$pass,$db);
      if(!$con){
        echo '<p align="center">Connection to the database could not be made.<br>Please try after some time.</p>';
      }
      else{
        $sql = "INSERT INTO `marketusers`(`name`, `email`, `password`, `company`, `address`, `country`, `city`, `code`, `number`) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[company]', '$_POST[address]', '$_POST[country]', '$_POST[city]', '$_POST[code]', '$_POST[number]')";

        $query = mysqli_query($con, $sql);

        if($query){
            // Add sid line here
            
            
            header('Location: http://www.robotsstore.co/272/272/');
            echo '<p align="center">You have signed up successfully. Welcome2.<br>Welcome to RobotsStore.</p>';
        }
        else{
          echo '<p align="center">There was an error while executing your query.<br>Please try after some time.</p>'; 
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