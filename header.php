<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Ethereum Buckeye Token</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/custom-art-dash.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
     <link rel="stylesheet" href="assets/css/select2.min.css">
     <link rel="stylesheet" href="assets/css/custom-art-ico.css">
     
    <!-- Font-awesome web fonts with css -->
    <link href="assets/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  </head>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php"><img src="assets/images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                    <div class="profile-leter">JD</div>
                 
                </div>
               <!--  <div class="nav-profile-text ml-2">
                  <p class="mb-1">John</p>
                </div> -->
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <!-- <a class="dropdown-item" href="my-profile.php">
                  <i class="mdi mdi-account mr-2"></i> My Profile</a> -->
                <a class="dropdown-item" href="change-password.php">
                  <i class="mdi mdi-lock-reset mr-2"></i> Change Password</a>
                 
                <a class="dropdown-item" href="dashboard.php">
                  <i class="mdi mdi-power mr-2"></i> Logout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-img">
                    <div class="profile-leter" style="color: #fff;height: 60px;width: 60px;">JD</div>
                 
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold ">John Doe</span>
                  
                </div>
               <!--  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="wallet.php">
                <span class="menu-title">Create Wallet</span>
                <i class="mdi mdi-wallet menu-icon"></i>
              </a>
            </li>
          
             
              <li class="nav-item">
              <a class="nav-link" href="referral-table.php">
                <span class="menu-title">Referral</span>
                <i class="mdi mdi-cash menu-icon"></i>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="transaction-table.php">
                <span class="menu-title">Transaction History</span>
                <i class="mdi mdi-file menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-settings menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a></li>
                  <li class="nav-item"> <a class="nav-link" href="kyc.php">KYC</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">logout</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>

            
        <!-- 
            <li class="nav-item">
              <a class="nav-link" href="client-list.php">
                <span class="menu-title">Client</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="verifier-list.php">
                <span class="menu-title">Verifier</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="verifier_on_boarding.php">
                <span class="menu-title">Verifier On-boarding <br>Requests</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li> -->

          <!--   <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
          
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
