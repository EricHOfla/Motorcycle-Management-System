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

            
              <!-- Table rows -->
              <table class='table datatable'>
                <thead>  
                  <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>MARK</th>
                    <th scope='col'>PLATE_NO</th>
                    <th scope='col'>PRICE</th>
                    <th scope='col'>STATUS</th>
                    <th scope='col'>DATE_STORED</th>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    </thead>
                    <?php
                $count = 1;  
                $fetch = mysqli_query($conn,"select * from store where stat!='Dane' and requ='Approved'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th><a href="#">'.$count.'</a></th>
                    <td>'.$row['mark'].'</td>
                    <td><a href="#" class="text-primary">'.$row['plate_no'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['datestored'].'</td>
                    <td><span class="badge bg-success">'.$row['requ'].'</span></td>';
                  echo"  
                    <td class='text-right'>".
                
                "<div class='dropdown'>
                <a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
                <div class='dropdown-menu dropdown-menu-right'>
                <a class='dropdown-item' href=update_store.php?s_id=".$row['s_id']."><i class='bi bi-pencil'></i> Edit</a>".
                "<a class='dropdown-item' href=delete_store.php?s_id=".$row['s_id']."><i class='bi bi-trash'></i> Delete</a>"."</td>";
                 
                 '</tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

               <tr>
                <?php
                
                $fetch = mysqli_query($conn,"select * from store where stat!='Dane' and requ='Rejected'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                
                 <tr>
                    <th><a href="#">'.$count.'</a></th>
                    <td>'.$row['mark'].'</td>
                    <td><a href="#" class="text-primary">'.$row['plate_no'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['datestored'].'</td>
                    <td><span class="badge bg-danger">'.$row['requ'].'</span></td>';
                  echo"  
                    <td class='text-right'>".
                
                "<div class='dropdown'>
                <a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
                <div class='dropdown-menu dropdown-menu-right'>
                <a class='dropdown-item' href=update_store.php?s_id=".$row['s_id']."><i class='bi bi-pencil'></i> Edit</a>".
                "<a class='dropdown-item' href=delete_store.php?s_id=".$row['s_id']."><i class='bi bi-trash'></i> Delete</a>"."</td>";
                 
                 '</tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

              
               </tr>

               <tr>
                <?php
                
                $fetch = mysqli_query($conn,"select * from store where stat!='Dane' and requ='Pending'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th><a href="#">'.$count.'</a></th>
                    <td>'.$row['mark'].'</td>
                    <td><a href="#" class="text-primary">'.$row['plate_no'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['datestored'].'</td>
                    <td><span class="badge bg-warning">'.$row['requ'].'</span></td>';
                  echo"  
                    <td class='text-right'>".
                
                "<div class='dropdown'>
                <a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
                <div class='dropdown-menu dropdown-menu-right'>
                <a class='dropdown-item' href=update_store.php?s_id=".$row['s_id']."><i class='bi bi-pencil'></i> Edit</a>".
                "<a class='dropdown-item' href=delete_store.php?s_id=".$row['s_id']."><i class='bi bi-trash'></i> Delete</a>"."</td>";
                 
                 '</tr>';
                  $count=$count +1;
                }
                ?>
               </tr>


               
               <tr>
                <?php
                
                $fetch = mysqli_query($conn,"select * from store where stat!='Dane' and requ='New'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th><a href="#">'.$count.'</a></th>
                    <td>'.$row['mark'].'</td>
                    <td><a href="#" class="text-primary">'.$row['plate_no'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['datestored'].'</td>
                    <td><span class="badge bg-info">'.$row['requ'].'</span></td>';
                  echo"  
                    <td class='text-right'>".
                
                "<div class='dropdown'>
                <a href='#' class='action-icon bi bi-three-dots-vertical' data-bs-toggle='dropdown'></a>
                <div class='dropdown-menu dropdown-menu-right'>
                <a class='dropdown-item' href=update_store.php?s_id=".$row['s_id']."><i class='bi bi-pencil'></i> Edit</a>".
                "<a class='dropdown-item' href=delete_store.php?s_id=".$row['s_id']."><i class='bi bi-trash'></i> Delete</a>"."</td>";
                 
                 '</tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

                </tbody>
              </table>
               
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