<?php require_once("layout/header.php"); ?>
<header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row">
                    <li class="nav-item align-self-center page-heading">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Business Name</h3>
                                <p>Branch Name</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>

                <ul class="navbar-item flex-row search-ul">
                    <li class="nav-item align-self-center search-animated">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <form class="form-inline search-full form-inline search" role="search">
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Type here to search">
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-item flex-row navbar-dropdown">
                    <li class="nav-item dropdown message-dropdown mr-4">
                        <a href="create-order.php" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Create Order
                        </a>
                    </li>
                    <li class="nav-item dropdown language-dropdown more-dropdown">
                        <div class="dropdown  custom-dropdown-icon">
                            <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                            <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                                <!--a class="dropdown-item" data-img-value="de" data-value="German" href="javascript:void(0);"><img src="assets/img/de.png" class="flag-width" alt="flag"> German</a>
                                <a class="dropdown-item" data-img-value="jp" data-value="Japanese" href="javascript:void(0);"><img src="assets/img/jp.png" class="flag-width" alt="flag"> Japanese</a>
                                <a class="dropdown-item" data-img-value="fr" data-value="French" href="javascript:void(0);"><img src="assets/img/fr.png" class="flag-width" alt="flag"> French</a-->
                                <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img src="assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                        </a>
                        <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                            <div class="notification-scroll">

                                <div class="dropdown-item">
                                    <div class="media server-log">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                        <div class="media-body">
                                            <div class="data-info">
                                                <h6 class="">Server Rebooted</h6>
                                                <p class="">45 min ago</p>
                                            </div>

                                            <div class="icon-status">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-item">
                                    <div class="media ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <div class="media-body">
                                            <div class="data-info">
                                                <h6 class="">Licence Expiring Soon</h6>
                                                <p class="">8 hrs ago</p>
                                            </div>

                                            <div class="icon-status">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-item">
                                    <div class="media file-upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        <div class="media-body">
                                            <div class="data-info">
                                                <h6 class="">Kelly Portfolio.pdf</h6>
                                                <p class="">670 kb</p>
                                            </div>

                                            <div class="icon-status">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </a>
                        <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="assets/img/profile-7.jpeg" class="img-fluid mr-2" alt="avatar">
                                    <div class="media-body">
                                        <h5>Alan Green</h5>
                                        <p>Project Leader</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="user_profile.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="login.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->
        <!--  BEGIN SIDEBAR  -->
        <?php require_once("layout/sidebar.php"); ?>
        <!--  END SIDEBAR  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                        <div id="badgeOutline" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row align-items-center">
                                        <div class="col-xl-1 col-md-2 col-3">
                                            <h4> Orders </h4>
                                        </div>
                                        <div class="col-xl-10 col-md-4 col-7">
                                            <!--search box-->
                                            <form>
                                                <div class="form-group row mt-4 mb-4">
                                                    <div class="col-sm-4 ml-auto">
                                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter here to search...">
                                                    </div>
                                                </div>
                                            </form>
                                            <!--search box-->
                                        </div>
                                        <div class="col-xl-1 col-md-2 col-2">
                                            <a href="#" class="text-right pr-3 order-icons">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer print-icon"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-left">
                                    <!--badges-->
                                    <span class="badge outline-badge-primary mb-2">All (20)</span>
                                    <!--span class="badge outline-badge-primary mb-2">Picker (10)</span-->
                                    <span class="badge outline-badge-primary mb-2">Received (15)</span>
                                    <span class="badge outline-badge-primary mb-2">Processing (0)</span>
                                    <span class="badge outline-badge-primary mb-2">Order Ready (23) </span>
                                    <span class="badge outline-badge-primary mb-2">Out For Delivery (33)</span>
                                    <span class="badge outline-badge-primary mb-2">Delivered (2)</span>
                                    <span class="badge outline-badge-primary mb-2">Completed (100)</span>
                                    <span class="badge outline-badge-primary mb-2">Canceled (100)</span>
                                   
                                    <div class="mb-4 mt-4">
                                        <div class="row order-info mb-3">
                                            <div class="col-lg-3 col-md-8 col-8 mb-3">
                                                <select class="form-control select-bulk" id="exampleFormControlSelect1">
                                                    <option>Bulk Actions</option>
                                                    <option>Recieved</option>
                                                    <option>Processing</option>
                                                    <option>Order Ready</option>
                                                    <option>Out For Delivery</option>
                                                    <option>Delivered</option>
                                                    <option>Cancelled</option>
                                                    <option>Completed</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1 col-md-4 col-4 mb-3 pl-0 order-column">
                                                 <input type="submit" name="time" class="btn btn-info apply-submit" value="Apply">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-12 mb-3 pl-0 order-column">
                                                 <select class="form-control select-bulk" id="exampleFormControlSelect1">
                                                    <option>Select Date</option>
                                                    <option>Today</option>
                                                    <option>Tomorrow</option>
                                                    <option>Day After</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-12 mb-3 pl-0 order-column">
                                                <select class="form-control select-bulk" id="exampleFormControlSelect1">
                                                    <option>Select Area</option>
                                                    <option>Test1</option>
                                                    <option>Test2</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-12 mb-3 pl-0 order-column">
                                                 <select class="form-control select-bulk" id="exampleFormControlSelect1">
                                                    <option>Select Time</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                             <div class="col-lg-2 col-md-3 col-12 mb-3 pl-0 order-column">
                                                 <!--input type="submit" name="time" class="btn btn-primary apply-submit" value="Filter"-->
                                                 <button class="btn btn-primary mb-2 mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg> Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row order-info mb-3 mt-3">
                                        <div class="col-lg-3 col-md-3 col-6 mb-2">
                                            <div class="d-flex justify-content-start">
                                                <div class="n-chk d-none d-sm-block">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="order-details">
                                                    <a href="view-order.php"><h5>#12345</h5></a>
                                                    <p class="order-text">Today</p>
                                                    <p class="order-text">5:30 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-6 mb-2">
                                            <span class="badge badge-success badge-sm status-badge"> Processing </span>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-6 mb-2 sm-border">
                                            <p class="order-text">1234567</p>
                                            <p class="order-text">10 Items</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-6 mb-2 sm-border">
                                            <p class="order-text">12-05-2020</p>
                                            <p class="order-text">5:30 AM - 10:30 AM</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 mb-2 text-center">
                                                <a href="view-order.php" class="order-link">View</a>
                                        </div>
                                    </div>
                                    <div class="row order-info mb-3 mt-3">
                                        <div class="col-lg-3 col-md-3 col-6 mb-2">
                                            <div class="d-flex justify-content-start">
                                                <div class="n-chk d-none d-sm-block">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="order-details">
                                                    <a href="view-order.php"><h5>#12345</h5></a>
                                                    <p class="order-text">Today</p>
                                                    <p class="order-text">5:30 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-6 mb-2">
                                            <span class="badge badge-success badge-sm status-badge"> Processing </span>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-6 mb-2 sm-border">
                                            <p class="order-text">1234567</p>
                                            <p class="order-text">10 Items</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-6 mb-2 sm-border">
                                            <p class="order-text">12-05-2020</p>
                                            <p class="order-text">5:30 AM - 10:30 AM</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 mb-2 text-center">
                                                <a href="view-order.php" class="order-link">View</a>
                                        </div>
                                    </div>
                                    <div class="center">
                                      <div class="pagination">
                                      <a href="#">&laquo;</a>
                                      <a href="#">1</a>
                                      <a href="#" class="active">2</a>
                                      <a href="#">3</a>
                                      <a href="#">4</a>
                                      <a href="#">5</a>
                                      <a href="#">6</a>
                                      <a href="#">&raquo;</a>
                                      </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <?php require_once("layout/footer.php"); ?>
    