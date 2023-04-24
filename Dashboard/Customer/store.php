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
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stored Date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
																<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
															</div>
														</div>
													</td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
																<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
															</div>
														</div>
													</td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
																<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
															</div>
														</div>
													</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
																<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
															</div>
														</div>
													</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
																<a class="dropdown-item" href="#" data-toggle="modal" ><i class="bi bi-trash"></i> Delete</a>
															</div>
														</div>
													</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Boxel Motor</td>
                    <td>2M</td>
                    <td>2016-05-25</td>
                   <td class="text-right">
														<div class="dropdown">
															<a href="#" class="action-icon bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item"><i class="bi bi-pencil"></i> Edit</a>
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