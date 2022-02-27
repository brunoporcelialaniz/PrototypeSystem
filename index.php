<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de gerenciamento veicular</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-car-side"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistema de gerenciamento veicular</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Serviço
            </div>

            <li class="nav-item">
                <a class="nav-link" href="maintenance.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manutenção</span></a>
            </li>
            
             <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Registro
            </div>

            <li class="nav-item">
                <a class="nav-link" href="distance.php">
                    <i class="fas fa-fw fa-car-side"></i>
                    <span>Gastos Diários</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Cadastro
            </div>

            <li class="nav-item">
                <a class="nav-link" href="company.php">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Empresa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Funcionário</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="car.php">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Veículo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php    
                                                include "conexao.php";

                                                $month = date('m-Y');
                                                $query_month = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '$month' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '$month';";
                                                $result_month = pg_query($dbconn, $query_month);
                                                $row_month = pg_fetch_row($result_month); 
                                                          
                                            ?>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Gastos (Mensal)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo $row_month[0];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php    
                                                include "conexao.php";
                                                
                                                $year = date('Y');
                                                $query_year = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'YYYY') = '$year' AND TO_CHAR(distance_date_exit, 'YYYY') = '$year';";
                                                $result_year = pg_query($dbconn, $query_year);
                                                $row_year = pg_fetch_row($result_year); 
                                                          
                                            ?>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Gastos (Anual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo $row_year[0];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Veículos em manutenção
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <?php    
                                                    include "conexao.php";

                                                    $query_percentage = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.vehicle)) FROM public.maintenance;";
                                                    $result_percentage = pg_query($dbconn, $query_percentage);
                                                    $row_percentage = pg_fetch_row($result_percentage); 
                                                          
                                                ?>
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row_percentage[0];?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" 
                                                            style="width: <?php echo $row_percentage[0];?>%" aria-valuenow="<?php echo $row_percentage[0];?>" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total de veículos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php    
                                                    include "conexao.php";

                                                    $query = "SELECT count(*) FROM public.vehicle;";
                                                    $result = pg_query($dbconn, $query);
                                                    $row = pg_fetch_row($result); 
                                                    echo $row[0];
                                                          
                                                ?>  
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-car fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Visão Geral dos Gastos</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gastos Constantes</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Abastecimentos
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Pneus
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Outros
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Serviços</h6>
                                </div>
                                <div class="card-body">
                                    <?php    
                                        include "conexao.php";

                                        $query_mechanic = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Mecânico Especialista';";
                                        $result_mechanic = pg_query($dbconn, $query_mechanic);
                                        $row_mechanic = pg_fetch_row($result_mechanic); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço Mecanico <span
                                            class="float-right"><?php echo $row_mechanic[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $row_mechanic[0];?>%"
                                            aria-valuenow="<?php echo $row_mechanic[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_painting = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Funilaria & Pintura Especialista';";
                                        $result_painting = pg_query($dbconn, $query_painting);
                                        $row_painting = pg_fetch_row($result_painting); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço de Funilaria <span
                                            class="float-right"><?php echo $row_painting[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row_painting[0];?>%"
                                            aria-valuenow="<?php echo $row_painting[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_electric = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Elétrica Especialista';";
                                        $result_electric = pg_query($dbconn, $query_electric);
                                        $row_electric = pg_fetch_row($result_electric); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço Eletrico <span
                                            class="float-right"><?php echo $row_electric[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $row_electric[0];?>%"
                                            aria-valuenow="<?php echo $row_electric[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_pneu = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Concessionária Pneu';";
                                        $result_pneu = pg_query($dbconn, $query_pneu);
                                        $row_pneu = pg_fetch_row($result_pneu); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço de Pneu <span
                                            class="float-right" id="row_pneu"><?php echo $row_pneu[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $row_pneu[0];?>%"
                                            aria-valuenow="<?php echo $row_pneu[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_supply = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Posto de Abastecimento';";
                                        $result_supply = pg_query($dbconn, $query_supply);
                                        $row_supply = pg_fetch_row($result_supply);                 
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço de Abastecimento <span
                                            class="float-right" id="row_supply"><?php echo $row_supply[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $row_supply[0];?>%"
                                            aria-valuenow="<?php echo $row_supply[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_tapestry = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Tapeçaria Especialista';";
                                        $result_tapestry = pg_query($dbconn, $query_tapestry);
                                        $row_tapestry = pg_fetch_row($result_tapestry); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço de Tapeçaria <span
                                            class="float-right"><?php echo $row_tapestry[0];?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row_tapestry[0];?>%"
                                            aria-valuenow="<?php echo $row_tapestry[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php    
                                        include "conexao.php";

                                        $query_car = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.maintenance)) FROM public.maintenance AS M
                                        INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE company_activity = 'Concessionária Veículo';";
                                        $result_car = pg_query($dbconn, $query_car);
                                        $row_car = pg_fetch_row($result_car); 
                                                          
                                    ?>
                                    <h4 class="small font-weight-bold">Serviço Geral <span
                                            class="float-right" id="row_car"><?php echo $row_car[0];?>%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $row_car[0];?>%"
                                            aria-valuenow="<?php echo $row_car[0];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Bruno Porceli Alaniz &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "chart_area.php";
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>