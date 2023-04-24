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
              <h5 class="card-title">Users</h5>
              <p></p>

              <!-- Table rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posion</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Eric</td>
                    <td>HABUMUGISHA</td>
                    <td>Eric H Ofla</td>
                    <td>ofla@example.com</td>
                    <td>Admin</td>
                    <td>Allowed</td>
                   <td class="text-right">
						<div class="dropdown">
						<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown"></a>
						<div class="dropdown-menu dropdown-menu-right">
						<a href="edit-user.php" class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
						<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
						</div>
						</div>
					</td>
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
             include '../footer.php';
          
?>