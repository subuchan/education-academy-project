<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Student Details Edit Form</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url() ?>admin/assets/img/profile-user/user-profile.jpg"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <?php 
               $user=$this->session->userdata('user');
                   extract($user);
             
              ?>
              <div class="dropdown-title">Welcome <?= $name ?></div>
              <a href="<?= base_url('main/admin_profile')  ?>" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('main/admin_logout')?>" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url('main/admin')?>"> <img alt="image" src="<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown active">
              <a href="<?=base_url('main/admin')?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Upload</li>
            <li class="dropdown"><a class="nav-link" href="<?= base_url('main/Kids_details_upload')  ?>"><i
                  data-feather="edit"></i><span>Kids Details Upload</span></a></li>
            <li class="dropdown">
              <a href="<?=  base_url('main/Student_details_upload/') ?>" class="nav-link"><i
                  data-feather="edit"></i><span>Student Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/Staff_details_upload/') ?>" class="nav-link"><i data-feather="edit"></i><span>Staff's Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="edit"></i><span>Course Details Upload</span></a>
            </li>
            <li class="menu-header">View Details</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="eye"></i><span>Student Details</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('main/kids_details_view')  ?>">Kids 0-5th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Six_std')  ?>">6th to 8th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Nine_std')  ?>">9th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Ten_std')  ?>">10th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Eleven_std')  ?>">11th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Twelve_std')  ?>">12th</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/view_staff_details')  ?>" class="nav-link"><i
                  data-feather="database"></i><span>Staff's Details</span></a>
            </li>
            <li><a class="nav-link" href="<?= base_url('main/edit')  ?>"><i data-feather="eye"></i><span>Edit Page</span></a></li>
            <li class="menu-header">Setting</li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i
                  data-feather="settings"></i><span>Setting</span></a>
            </li>

            <li class="dropdown">
              <a href="<?= base_url('main/admin_logout')  ?>" class="nav-link"><i
                  data-feather="log-out"></i><span>Logout</span></a>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
            <?php
          if(isset($data)){
            ?>
              <div class="card">
                <form action="<?= base_url('main/student_update') ?>" method="post" enctype="multipart/form-data">

                  <div class="card-header">
                    <h4>Student's Details Upload Form</h4>
                  </div>
                  <div class="card-body">
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
              
                      <input type="text" hidden name="edid" value="<?= $data[0]->id  ?>" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>EnRoll Number :</label>
                      <input type="text" name="std_enroll" value="<?= $data[0]->std_enroll  ?>" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Name of the Student :</label>
                      <input type="text" name="std_name" value="<?= $data[0]->std_name  ?>" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Date Of Birth :</label>
                      <input type="date" name="std_dob" value="<?= $data[0]->std_dob  ?>" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Age :</label>
                      <input type="text" name="std_age" class="form-control" value="<?= $data[0]->std_age  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Gender :</label>
                      <select class="form-control" name="std_gender">
                        <option><?= $data[0]->std_gender  ?></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Name of Parent(s)/Guardian :</label>
                      <input type="text" name="std_parent" class="form-control" value="<?= $data[0]->std_parent  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Student's School Name :</label>
                      <input type="text" name="std_school" class="form-control" value="<?= $data[0]->std_school  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Select Standard :</label>
                      <select class="form-control" name="std_standard">
                        <option><?= $data[0]->std_standard  ?> </option>
                        <option value="6th standard">6th Standard</option>
                        <option value="7th standard">7th Standard</option>
                        <option value="8th standard">8th Standard</option>
                        <option value="9th standard">9thth Standard</option>
                        <option value="10th standard">10th Standard</option>
                        <option value="11th standard">11th Standard</option>
                        <option value="12th standard">12th Standard</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Date Of Join :</label>
                      <input type="date" class="form-control" name="std_doj" value="<?= $data[0]->std_doj  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Mobile Number(Home) :</label>
                      <input type="text" class="form-control" name="std_mobile" value="<?= $data[0]->std_mobile  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Student Email :</label>
                      <input type="email" class="form-control" name="std_mail" value="<?= $data[0]->std_mail  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Student's Address :</label>
                      <input type="text" class="form-control" name="std_address" value="<?= $data[0]->std_address  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <img src="<?= base_url('upload/') .$data[0]->std_pic ?>" alt="" width="100" height="100">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Student Profile Photo :</label>
                      <input type="file" class="form-control" name="std_pic" value="<?= $data[0]->std_pic  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                    </div>
                  </div>
                </form>
                <?php
          }
                ?>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </section>

        <footer class="main-footer">
          <div class="footer-left">
            <a href="#">NOTE: This Website Only Support Better View On 1200px.</a></a>
          </div>
          <div class="footer-right">
          </div>
        </footer>
      </div>
    </div>
    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>admin/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="<?= base_url() ?>admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="<?= base_url() ?>admin/assets/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->

</html>