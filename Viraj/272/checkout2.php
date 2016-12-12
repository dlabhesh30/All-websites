<html>

<body>
<?php 
    
if (session_status() == PHP_SESSION_NONE){
                    session_start();
                  }
                  $username = null;
                  if($_SESSION !== NULL && $_SESSION['Username'] != null ){
                    $username = $_SESSION['Username'];
                  }else{
                    $current_url_parent = "http://$_SERVER[HTTP_HOST]".dirname($_SERVER['PHP_SELF']);
                    //TODO: check for root dir
                    $login_page = $current_url_parent."/login.html";
                    header("Location: ".$login_page);
                    die();
                  }
                  $server = "localhost";
                  $user = "myhelpi3_root";
                  $pass = "chachi420";
                  $db = "myhelpi3_Users";


                  $conn = new mysqli($server, $user, $pass, $db);
                  $sql = "Delete from cart where Username = '$username'";
                  $result = $conn->query($sql);
                  $conn->commit();
                  $conn->close();
               #$ch = curl_init();
                  echo "<script>alert('Your Order has been received.');document.location='http://www.myhelpinghandonline.com/272/index.php'</script>";

                  #header("Location: http://www.myhelpinghandonline.com/272/index.php");
                #curl_setopt($ch, CURLOPT_URL, "http://myhelpinghandonline.com/buyproduct.php");
                #curl_setopt($ch, CURLOPT_POST, true);
                #curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                /*curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



                $contents = curl_exec ($ch);
*/





#echo $conn;


?>


</body>
</html>