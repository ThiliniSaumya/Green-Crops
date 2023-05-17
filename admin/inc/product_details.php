<?php 
  $tabbb=$_GET['tabb'];
if($tabbb==3){

}else{
  header('location: admin.php?tabb=3');
}
 ?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/product_details.css">
</head>
  
<body >

   <style>
      a{text-decoration: none;}
   </style>


   <div class="p-m-i clearfix" >

      <h1 id="main_topic" style="margin-bottom: 4px;margin-top: 5px;">Product details</h1>
      <a href="admin.php?tabb=1" style="font-size: 25px;">                   +Add New Product </a>
      <p style="font-weight: bold;">     List of Fruits</p>

<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"fruits\";");
   echo '<table calss="productsTable" style="width: 500px;margin: auto; border-collapse: collapse;">';
   echo '<tr style="background-color:  #aaa; padding: 10px; ">';
              // echo "<th>id</th>";
               echo "<th>edit   </th>";
               echo "<th>delete   </th>   ";
               echo "<th>name         </th>  ";
               echo "<th>price     </th> ";
               echo "<th style=\"width: 100px;\">discription </th>";
               echo "<th>image   </th> ";
   echo "</tr>";
   while($row=mysqli_fetch_array($res))
   {

             echo' <tr  style="background-color:  #ddd; padding: 10px; border-bottom: 0.5px solid #0000;">';
               //echo "<td>{$row['id']}</td>";
               echo "<td><a href=\"admin.php?tabb=2&user_id={$row['id']}\">Edit    </a></td>";
               echo "<td><a href=\"inc/deleteproducts.php?user_id={$row['id']}\">Delete    </a></td>";
               echo "<td>{$row['name']}</td>";
               echo "<td>{$row['price']}</td>";
               echo "<td >{$row['discription']}</td>";
               
               echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="50" width="50"/><td/>';
            echo" </tr>";
   
   } 
   echo "</tr>";
   
   echo "</table>";
?>


<p style="font-weight: bold;">     List of Cut flowers</p>

<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"cut flowers\";");
   echo '<table calss="productsTable" style="width: 500px;margin: auto; border-collapse: collapse;">';
   echo '<tr style="background-color:  #aaa; padding: 10px; ">';
              // echo "<th>id</th>";
               echo "<th>edit   </th>";
               echo "<th>delete   </th>   ";
               echo "<th>name         </th>  ";
               echo "<th>price     </th> ";
               echo "<th style=\"width: 100px;\">discription </th>";
               echo "<th>image   </th> ";
   echo "</tr>";
   while($row=mysqli_fetch_array($res))
   {

             echo' <tr  style="background-color:  #ddd; padding: 10px; border-bottom: 0.5px solid #0000;">';
               //echo "<td>{$row['id']}</td>";
               echo "<td><a href=\"admin.php?tabb=2&user_id={$row['id']}\">Edit    </a></td>";
               echo "<td><a href=\"inc/deleteproducts.php?user_id={$row['id']}\">Delete    </a></td>";
               echo "<td>{$row['name']}</td>";
               echo "<td>{$row['price']}</td>";
               echo "<td >{$row['discription']}</td>";
               
               echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="50" width="50"/><td/>';
            echo" </tr>";
   
   } 
   echo "</tr>";
   
   echo "</table>";
?>











<p style="font-weight: bold;">     List of plants</p>

<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"plants\";");
   echo '<table calss="productsTable" style="width: 500px;margin: auto; border-collapse: collapse;">';
   echo '<tr style="background-color:  #aaa; padding: 10px; ">';
              // echo "<th>id</th>";
               echo "<th>edit   </th>";
               echo "<th>delete   </th>   ";
               echo "<th>name         </th>  ";
               echo "<th>price     </th> ";
               echo "<th style=\"width: 100px;\">discription </th>";
               echo "<th>image   </th> ";
   echo "</tr>";
   while($row=mysqli_fetch_array($res))
   {

             echo' <tr  style="background-color:  #ddd; padding: 10px; border-bottom: 0.5px solid #0000;">';
               //echo "<td>{$row['id']}</td>";
               echo "<td><a href=\"admin.php?tabb=2&user_id={$row['id']}\">Edit    </a></td>";
               echo "<td><a href=\"inc/deleteproducts.php?user_id={$row['id']}\">Delete    </a></td>";
               echo "<td>{$row['name']}</td>";
               echo "<td>{$row['price']}</td>";
               echo "<td >{$row['discription']}</td>";
               
               echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="50" width="50"/><td/>';
            echo" </tr>";
   
   } 
   echo "</tr>";
   
   echo "</table>";
?>
  </div>
</body>
</html>