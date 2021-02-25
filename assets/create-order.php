<?php require_once "layout/header.php";?>
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
    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-list">
            <line x1="8" y1="6" x2="21" y2="6"></line>
            <line x1="8" y1="12" x2="21" y2="12"></line>
            <line x1="8" y1="18" x2="21" y2="18"></line>
            <line x1="3" y1="6" x2="3" y2="6"></line>
            <line x1="3" y1="12" x2="3" y2="12"></line>
            <line x1="3" y1="18" x2="3" y2="18"></line>
        </svg></a>
    <ul class="navbar-item flex-row search-ul">
        <li class="nav-item align-self-center search-animated">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-search toggle-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <form class="form-inline search-full form-inline search" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto"
                        placeholder="Type here to search">
                </div>
            </form>
        </li>
    </ul>
    <ul class="navbar-item flex-row navbar-dropdown">
        <li class="nav-item dropdown language-dropdown more-dropdown">
            <div class="dropdown  custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width"
                        alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></a>

                <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                    <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img
                            src="assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown notification-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg><span class="badge badge-success"></span>
            </a>
            <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                <div class="notification-scroll">
                    <div class="dropdown-item">
                        <div class="media server-log">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-server">
                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                <line x1="6" y1="6" x2="6" y2="6"></line>
                                <line x1="6" y1="18" x2="6" y2="18"></line>
                            </svg>
                            <div class="media-body">
                                <div class="data-info">
                                    <h6 class="">Server Rebooted</h6>
                                    <p class="">45 min ago</p>
                                </div>

                                <div class="icon-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item">
                        <div class="media ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                            <div class="media-body">
                                <div class="data-info">
                                    <h6 class="">Licence Expiring Soon</h6>
                                    <p class="">8 hrs ago</p>
                                </div>

                                <div class="icon-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item">
                        <div class="media file-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <div class="media-body">
                                <div class="data-info">
                                    <h6 class="">Kelly Portfolio.pdf</h6>
                                    <p class="">670 kb</p>
                                </div>

                                <div class="icon-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg> <span>My Profile</span>
                    </a>
                </div>
                <div class="dropdown-item">
                    <a href="login.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg> <span>Log Out</span>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</header>
</div>
<!--  BEGIN SIDEBAR  -->
<?php require_once "layout/sidebar.php";?>
<!--  END SIDEBAR  -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-heading">
                        <h5 class="">Customer</h5>
                    </div>
                    <div class="widget-content">
                        <div class="order-summary">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg></span>
                                </div>
                                <input type="text" id="tags" class="form-control form-control-sm"
                                    aria-label="Amount (to the nearest dollar)" placeholder="Search Customer">
                                <div class="input-group-append">
                                    <a href="javascript:void(0)" class="input-group-text customer-icon"
                                        data-toggle="modal" data-target=".bd-example-modal-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14"></line>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-heading">
                        <h5 class="">Search Product</h5>
                    </div>
                    <div class="widget-content">
                        <div class="order-summary">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Search to add products">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-content">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-order">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Item Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th class="">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-primary text-center">Shaun Park</td>
                                                <td>123</td>
                                                <td class="">
                                                    <input id="demo_vertical2" type="text" class="form-control-sm"
                                                        value="" name="demo_vertical2">
                                                </td>
                                                <th>40</th>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #dee2e6;">
                                                <td class="text-primary text-center">Andy King</td>
                                                <td>78</td>
                                                <td>
                                                    <input id="demo_vertical2" type="text" class="form-control-sm"
                                                        value="" name="demo_vertical2">
                                                </td>
                                                <th>50</th>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-right">Sub Total</td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Add a discount</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Add a coupon</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Total Discount</td>
                                                <td></td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #dee2e6;">
                                                <th colspan="3" class="text-right">Total incl. taxes </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="text-right">
                                                    <button class="btn btn-warning mb-4 mr-2 btn-sm">Save</button>
                                                </th>
                                                <th>
                                                    <button class="btn btn-dark mb-4 mr-2 btn-sm">Cancel</button>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "layout/footer.php";?>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Create a New Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mobile</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Email</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Gst. No</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Gst. No">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Address Type</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Home</option>
                                    <option>Work</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control pac-target-input" placeholder="enter your city name"
                                aria-label="Recipient's username" aria-describedby="basic-addon2"
                                id="location-text-boxs" value=" Ambalpadi, Udupi, Karnataka, India" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="getLocation()">Detect</button>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->