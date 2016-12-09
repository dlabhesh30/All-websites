<?php
print("<tr>
          
          <td>".$row['SNo']."</td>
          <td>".$row['Name']."</td>
          <td>".$row['Description']."</td>
          <td><img src='".$row['Image']."' class='img-rounded' height='150'></td>
          <td>".$row['Price']."</td>
          <td>".$row['Quantity']."</td>
          <td>".$row['Rating']."</td>
          <td><form action='view.php' method='post'>
                <input type='hidden' name='Name' value='".$row['Name']."' />
                <input type='submit' value='View'>
              </form></td>
          </tr>");
?>