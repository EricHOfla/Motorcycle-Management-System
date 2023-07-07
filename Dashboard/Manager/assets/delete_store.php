<?php
include '../connect.php';

$s_id=$_GET['s_id'];
$data="DELETE FROM `store` WHERE `s_id` ='$s_id'";

$res=mysqli_query($conn,$data) 

   or die("delete failed".mysqli_error());


   ?>
<script>
	alert("Delete successful");

</script>
<?php
echo"<meta http-equiv='refresh' content='0;url=store.php'>";



