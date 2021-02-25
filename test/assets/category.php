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
                        <a href="create-category.php" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Create Category
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
                                        <h4> Category </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area text-left">
                                <div class="table-responsive">
                                    <table class="table table-hover  table-checkable table-highlight-head mb-4">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column">
                                                    <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                        <input type="checkbox" class="new-control-input todochkbox" id="todoAll">
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </th>
                                                <th class="">Category Name</th>
                                                <th class="">Visible</th>
                                                <th class="">Priority</th>
                                                <th class="">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="checkbox-column">
                                                    <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                        <input type="checkbox" class="new-control-input todochkbox" id="todo-1">
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="view-category.php"><p class="mb-0">Shaun Park</p></a>
                                                </td>
                                                <td>Yes</td>
                                                <td>1</td>
                                                <td>   
                                                    <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                        <input type="checkbox" checked>
                                                        <span class="slider"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
       