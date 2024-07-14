<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teacher Main</title>
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../assets/css/bg.css">
    <link rel="stylesheet" href="../../../assets/css/animate.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(var(--bs-blue), var(--bs-accordion-bg) 99%), var(--bs-yellow);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-0"><img class="rounded-circle" src="../../../assets/img/isatlogo.png" width="75" height="71" style="height: 65px;width: 65px;"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 24px;">Sip sys</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" style="margin-top: 7px;">
                        <div class="nav-item dropdown"><a aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-accordion-bg);font-size: 13.6px;margin-left: 14px;"><i class="fas fa-users" style="margin-right: 3px;"></i>Student</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="teachers_control.php">Register Student</a><a class="dropdown-item" href="teachers_control4.php">Application Request</a><a class="dropdown-item" href="teachers_control5.php">Manage Deployment</a></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="teachers_control2.php"><i class="fas fa-book-reader"></i><span>Internship</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="teachers_control3.php"><i class="far fa-building"></i><span>Company</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background: var(--bs-teal);">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: var(--bs-blue);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Yugen deyb</span><img class="border rounded-circle img-profile" src="../../../assets/img/dabe4.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="settings.html"><i class="fas fa-user-cog fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="../../../index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                <?php
                            if (isset($_SESSION['loguser'])) {
                                echo "<h1 style='color:black;'>Welcome " . $_SESSION['loguser'] . "</h1>";
                            }
                        ?>

                </div>
                <div class="container py-4 py-xl-5">
                    <div class="row row-cols-2 row-cols-md-4 justify-content-center" style="height: 339.4px;">
                    <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_students";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>
                        <div class="col" data-bss-hover-animate="pulse" style="border-radius: 15px;border: 5.4px solid var(--bs-warning);">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3" style="height: 337.4px;">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="width: 100px;height: 100px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person" style="font-size: 49px;width: 50px;height: 50px;">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0" style="font-size: 48px;"><?php echo $total_records; ?></h2>
                                    <p class="mb-0" style="font-size: 24px;">No. of Students</p>
                                </div>
                            </div>
                        </div>
                        <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_internship";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>
                        <div class="col" data-bss-hover-animate="pulse" style="border-radius: 15px;border: 5.4px solid var(--bs-blue);">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3" style="height: 337.4px;">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="width: 100px;height: 100px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder-check" style="width: 50px;height: 50px;">
                                        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"></path>
                                        <path d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.707 0l-1.5-1.5a.5.5 0 0 1 .707-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0" style="font-size: 48px;"><?php echo $total_records; ?></h2>
                                    <p class="mb-0" style="font-size: 24px;">Internships</p>
                                </div>
                            </div>
                        </div>
                        <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_company";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>
                        <div class="col" data-bss-hover-animate="pulse" style="border-radius: 15px;border: 5.4px solid var(--bs-success);">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3" style="height: 337.4px;">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="width: 100px;height: 100px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-building" style="width: 50px;height: 50px;">
                                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"></path>
                                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0" style="font-size: 48px;"><?php echo $total_records; ?></h2>
                                    <p class="mb-0" style="font-size: 24px;">Companies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: linear-gradient(var(--bs-blue), var(--bs-blue) 100%);height: 70.8px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span><span style="color: rgb(255, 255, 255);">Copyright © SIP SYS 2024</span></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/bs-init.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="../../../assets/js/theme.js"></script>
   
</body>

</html>