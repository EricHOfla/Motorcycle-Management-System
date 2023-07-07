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
                    <th scope='col'>Message</th>
                    </thead>";
                $count = 1;
                $fetch = mysqli_query($conn,"select * from application,store 
                where  store.s_id=application.store_id and application.customer_id = '$cid' and store.requ='Approved' and store.stat='Dane'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo"<tr>";
                 echo"<td>".$count."</td>";
                 echo"<td>".$row['mark']."</td>";
                 echo"<td>".$row['plate_no']."</td>";
                 echo"<td>".$row['price']."</td>";
                 echo"<td>".$row['pay']."</td>";
                 echo"<td>".$row['dates']."</td>";
                 echo"<td>".$row['stat']."</td>";
                 echo"<td>Come to Take Your Motor<br>
                 Not latter than 1 Weeks</td>";
                         
                 
            "</tr>";
                         
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