<?php 
            include 'navbar.php';
            $cid = $_SESSION['c_id'];
            // include 'sidebar.php';
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
              <h5 class="card-title">Our Store</h5>
              <p></p>

              <?php
          echo"
              <!-- Table rows -->
              <table class='table datatable'>
                <thead>  
                  <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>MARK</th>
                    <th scope='col'>PLATE_NO</th>
                   
                    <th scope='col'>PRICE</th>
                    
                    <th scope='col'>Action</th>
                    </thead>";
                $count = 1;
                $status="NOT PAID";
                $requ="Approved";

                $fetch = mysqli_query($conn,"select * from store where  requ!='$requ' and status='$status' and stat='Normal'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo"<tr>";
                 echo"<td>".$count."</td>";
                 echo"<td>".$row['mark']."</td>";
                 echo"<td>".$row['plate_no']."</td>";
                 
                 echo"<td>".$row['price']."</td>";
                         
                 echo"<td class='text-right'>".
                
						"<div class='dropdown'>
						<a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
						<div class='dropdown-menu dropdown-menu-right'>
						<a class='dropdown-item' href=view_store.php?s_id=".$row['s_id']."><i class='bi bi-pencil'></i>View</a>".
            
            "</td>";
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