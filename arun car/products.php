
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
?>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Products</title>

</head>
<body class="page1" id="top">

<header>

    <section id="stuck_container">

        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li class="current"><a href="products.php">Products</a></li>
                                <li><a href="user.php">Users</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="grid_12">

<div>
    <h3>Recent Products</h3>
        <ul>

            <?php
            for($i=1;$i<=5;$i++){
            if(isset($_COOKIE[$i])){?>
                <li><a  onclick='openModal("<?php  echo $_COOKIE[$i]; ?>")'><img src='images/<?php echo $_COOKIE[$i]; ?>.jpg' height="100px" width="100px"></a></li>
            <?}}?>


        </ul>
    <h3>Frequent Products</h3>
    <ul>
        <?php
        $arr = array();
        $max_val = array();
        if(isset($_COOKIE["frequent"])){
            $freq_arr = $_COOKIE["frequent"];
            $freq_arr = stripslashes($freq_arr);
            $savedCardArray = json_decode($freq_arr, true);
            $i=0;
            for($i=0;$i<5;$i++){
                $max_val[$i]= max($savedCardArray);
                $arr[$i] = array_search($max_val[$i],$savedCardArray);
                $savedCardArray[$arr[$i]] = 0;
            }
            for($i=0;$i<5;$i++){

                $savedCardArray[$arr[$i]] = $max_val[$i];
            }


        }

        $i=0;
        for($i=0;$i<count($max_val);$i++){
        if($max_val[$i]!=0){?>
            <li><a  onclick='openModal("<?php  echo $arr[$i]; ?>")'><img src='images/<?php echo $arr[$i]; ?>.jpg' height="100px" width="100px"></a></li>
        <?}}?>

    </ul>

</div>

<h3>All Products</h3>



<?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
$GLOBALS['name']='1';
if($num_files > 0)
{
     $count=-1;
    while(false !== ($file = readdir($folder)))
    {
        $count +=1;
        $file_path = $folder_path.$file;
        $name = basename($file_path, ".jpg");
        $GLOBALS['nam'] = $name;
        $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
        if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp')
        {
            ?>

           <div class="image_modal"> <a  onclick='openModal("<?php  echo $name; ?>")'><img src="<?php echo $file_path; ?>" width="200"  height="200" />
             <br/>   <span id="XXX">Product <?php echo $count; ?></span></a></div>




        <?php
        }
    }
}
else
{
    echo "the folder was empty !";
}
closedir($folder);
?>
            </div>
        </div>
    </div>
</section>
<script type="application/javascript">

    function openModal(file) {
        window.open('productprofile.php?id='+file);

    }

</script>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">Alpha Toastmasters</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
<link rel="stylesheet" href="ui/css/style.css"/>
<link rel="stylesheet" href="css/products.css"/>
<link rel="stylesheet" href="css/style.css"/>
</body>
</html>
