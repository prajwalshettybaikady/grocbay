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
<?php require_once("layout/sidebar.php"); ?>
<!--  END SIDEBAR  -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Item Update Panel</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-4 col-6 text-right">
                                    <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-6 ml-auto text-right">
                                    <a href="add-stock.php" class="btn btn-warning btn-sm">Add Stock</a>
                                </div>

                            </div>
                            <div class="row form-row">
                                <div class="col-md-4 form-group">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="input-file-now">Featured Image</label>
                                            <input type="file" id="input-file-now" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="inputAddress">Item Name</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="Item Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>category 1</option>
                                                    <option>category 2</option>
                                                    <option>category 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-4 form-group">
                                    <label for="inputAddress">Stock Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Delivery Duration</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Select Brand</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Brand1</option>
                                        <option>Brand2</option>
                                        <option>Brand3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-4 form-group">
                                    <label for="inputAddress">Product Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Stock Notify</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Stock1</option>
                                        <option>Stock2</option>
                                        <option>Stock3</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Return Duration</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-12 form-group">
                                    <label for="inputAddress">Item Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Item Description"></textarea>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-12 form-group">
                                    <label for="inputAddress">Manufacturer Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Manufacturer Description"></textarea>
                                </div>
                            </div>
                            <!--end-->
                            <div class="row form-row d-flex justify-content-between">
                                <h5>Price Variation</h5>
                                <a href="javascript:void(0)" class="btn btn-warning mb-4 btn-sm" data-toggle="modal"
                                    data-target=".bd-example-modal-lg1">Add New Variant</a>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Image</th>
                                                    <th>Variation Name</th>
                                                    <th>SKU</th>
                                                    <th class="">Barcode</th>
                                                    <th>MRP</th>
                                                    <th class="text-center">Dis. Price</th>
                                                    <th>Membership Price</th>
                                                    <th>Prority</th>
                                                    <th class="">Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-primary"></td>
                                                    <td></td>
                                                    <td class=""></td>
                                                    <td></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-primary"></td>
                                                    <td></td>
                                                    <td class=""></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("layout/footer.php"); ?>
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
                                <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mobile</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Email</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234567890">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Gst. No</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="abc@gmail.com">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Apartment, studio, or floor"></textarea>
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


    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Add New Variant</h5>
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
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Variation Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Variation Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Priority</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">SKU</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">HSN</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Barcode</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Loyalty Points</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Weight (in Kg)</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Order Quanitity( Min )</label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Order Qunatity( Max )</label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Status</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Mrp*</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Discounted Price*</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Membership Price*</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
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