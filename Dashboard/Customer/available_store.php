<?php 
            include 'navbar.php';
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
                $fetch = mysqli_query($conn,"select * from store where status='$status'");
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
            "<a class='dropdown-item' href=request_store.php?s_id=".$row['s_id']."><i class='bi bi-trash'></i>Request</a>"."</td>";
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