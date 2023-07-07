<?php
include 'connect.php';

$c_id=$_GET['c_id'];
$data="DELETE FROM `customer` WHERE `c_id` ='$c_id'";

$res=mysqli_query($conn,$data) 

   or die("delete failed".mysqli_error());


   ?>
<script>
	alert("Delete successful");

</script>
<?php
echo"<meta http-equiv='refresh' content='0;url=customers_info.php'>";
?>


