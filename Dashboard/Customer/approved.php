<?php 
            include 'navbar.php';
            $cid = $_SESSION['c_id'];
            // include 'sidebar.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Request Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Booking</li>
          <li class="breadcrumb-item active">View Request</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Request</h5>
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
                    <th scope='col'>Pay Method</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                    </thead>";
                $count = 1;
                $fetch = mysqli_query($conn,"select * from application,store 
                where  store.s_id=application.store_id and application.customer_id = '$cid' and store.requ='Approved' and application.stat='Dane' and store.status='NOT PAID'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo"<tr>";
                 echo"<td>".$count."</td>";
                 echo"<td>".$row['mark']."</td>";
                 echo"<td>".$row['plate_no']."</td>";
                 echo"<td>".$row['price']."</td>";
                 echo"<td>".$row['pay']."</td>";
                 echo"<td>".$row['dates']."</td>";
                 echo"<td>".$row['requ']."</td>";
                         
                 echo"<td class='text-right'>".
                
						"<div class='dropdown'>
						<a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
						<div class='dropdown-menu dropdown-menu-right'>
						".
            "<a class='dropdown-item' href=pay.php?s_id=".$row['s_id']."><i class='bi bi-cash'></i>PAY</a>"."</td>";
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