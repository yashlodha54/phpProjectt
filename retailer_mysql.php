<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "retailerproduct";
$table="product_details";


$conn = mysqli_connect($servername, $username, $password,$database );
$phonenumber = $_POST['phonenumber']; 
$image= $_POST['fileToUpload'];
$productname= $_POST['productname'];
$price = $_POST['price'];
$category =$_POST['category'];

$SQL = "INSERT INTO `product_details` (`retailer_phonenumber`, `product_imgage`, `product_name`, `product_price`, `product_category`) VALUES ('$phonenumber', '$image', '$productname', '$price', '$category')";
$result =mysqli_query($conn, $SQL);



?>