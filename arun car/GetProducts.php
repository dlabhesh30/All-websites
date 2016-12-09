<?php 
  $server = "localhost";
  $user = "arunkuma_user";
  $pass = "arunkuma_user";
  $db = "arunkuma_user";


$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Products";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {
    print('<div class="box1">');
    $boolean=true;
    for ($i=0; $i <3 && $boolean; $i++) { 
      # code...
      print('<div class="col_1_of_3 span_1_of_3"><form action="single.php" method="post">
  <input type="hidden" name="SNo" value="'.$row["SNo"].'" />
  <input type="hidden" name="Name" value="'.$row["Name"].'" />
  <input type="hidden" name="Description" value="'.$row["Description"].'" />
  <input type="hidden" name="Price" value="'.$row["Price"].'" />
  <input type="hidden" name="Quantity" value="'.$row["Quantity"].'" />
  <input type="hidden" name="Rating" value="'.$row["Rating"].'" />
  <input type="hidden" name="Image" value="'.$row["Image"].'" />
              

             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">'.$row['Name'].'</h3>
              <p class="m_2">'.$row['Description'].'</p>
                 <div class="grid_img">
               <div class="css3"><img src="'.$row['Image'].'" alt="" height="300"/></div>
                    <div class="mask">
                            <div class="info"><input type="submit" value="View"></div>
                        </div>
                      </div>
                       <div class="price">$'.$row['Price'].'</div>
             </div>
              </div>
             <span class="rating">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                (45)
                </span></form>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="#">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>sed diam nonummy</h3><a href=""></a></li>
                  <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </div>
            ');
      if($i!=2 && $row = $result->fetch_assoc()){
        
      }else{
        $boolean=false;
      }
      
    }
    print('<div class="clear"></div>
            </div>');
        
    }
    print('<div class="clear"></div>
            </div>');
    
}


$conn->close();
?>

