<?php 
    include 'navbar.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <div class="box-header with-border">
              <a href="insert-customer.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Add New Customer</a>
            </div>
              <p></p>
<?php
          echo"
              <!-- Table rows -->
              <table class='table datatable'>
                <thead>  
                  <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Last Name</th>
                    <th scope='col'>Username</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Telephone</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                    </thead>";
                    $count = 1;  
                $fetch = mysqli_query($conn,"select * from customer");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo"<tr>";
                 echo"<td>".$count."</td>";
                 echo"<td>".$row['fname']."</td>";
                 echo"<td>".$row['lname']."</td>";
                 echo"<td>".$row['customername']."</td>";
                 echo"<td>".$row['email']."</td>";
                 echo"<td>".$row['telephone']."</td>";
                 echo"<td>".$row['status']."</td>";          
                 echo"<td class='text-right'>".
                
						"<div class='dropdown'>
						<a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
						<div class='dropdown-menu dropdown-menu-right'>
						<a class='dropdown-item' href=update_customer.php?c_id=".$row['c_id']."><i class='bi bi-pencil'></i> Edit</a>".
						"<a class='dropdown-item' href=delete-customer.php?c_id=".$row['c_id']."><i class='bi bi-trash'></i> Delete</a>"."</td>";
            $count = $count + 1; 
          }     
echo"</table>";
            
                
?>
              <!-- End Table rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php 
        include "../footer.php"
          
   ?>















     
echo' <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

<!-- Profile Edit Form -->
<!-- End Profile Edit Form -->

</div>';
}                
 ?>

<div class="tab-pane fade pt-3 profile-edit" id="profile-settings">

<!-- Settings Form -->
<form>

  <div class="row mb-3">
      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
      <div class="col-md-8 col-lg-9">
        <img src='assets/img/boy.png' alt="Profile">
        <div class="ass">
         <input type="file" class="btn btn- btn-sm" title="Upload new profile image" name ="image">
          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
      </div>
    </div>

  <div class="text-center">
    <button type="submit" name = "prof" class="btn btn-primary">Save Changes</button>
  </div>
</form><!-- End settings Form -->

</div>


</div>

</div><!-- End Bordered Tabs -->

</div>
</div>

</div>
</div>
</section>';

<?php 

if(isset($_POST['save']))
{
$id =$_POST['id'];
$a = $_POST['fullName'];
$b = $_POST['lname'];
$c = $_POST['username'];
$d = $_POST['email'];
$f = $_POST['Posion'];
$g = $_POST['dob'];
$h = $_POST['gender'];
$i = $_POST['address'];
$j = $_POST['phone'];
$z = $_POST['Account'];
$k = $_POST['status'];

$sql = mysqli_query($conn,"update users set Firstname='$a',Lastname='$b',Username='$c',telephone='$j',
address='$i',email='$d',gender='$h',position='$f',dates='$g',account_type='$z',status='$k' where User_id='$id'");

if($sql == true)
{
?>
<script>
alert('updated');
</script>
<?php
}

}


?>
