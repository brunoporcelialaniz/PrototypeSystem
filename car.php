<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de gerenciamento veicular</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <li class="nav-item">
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

            <!-- Nav Item - Utilities Collapse Menu -->
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                    <h1 class="h3 mb-2 text-gray-800">Veículo</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Cadastro Veículo</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Modelo</label>
                                        <input type="text" class="form-control" name="vehicle_model" placeholder="Ex. Gol">
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Marca</label>
                                        <input type="text" class="form-control" name="vehicle_brand" placeholder="Ex. Fiat">
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Cor</label>
                                        <input type="text" class="form-control" name="vehicle_color" placeholder="Ex. Branco">
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Quilômetro rodado</label>
                                        <input type="number" class="form-control" name="vehicle_kilometer" placeholder="Ex. 77342 ou 0">
                                    </div>
                                </div>

                                <hr class="sidebar-divider d-none d-md-block">

                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Combustível</label>
                                        <select class="custom-select" name="vehicle_fuel">
                                            <option></option>
                                            <option value="Gasolina">Gasolina</option>
                                            <option value="Etanol">Etanol</option>
                                            <option value="Gasolina/Etanol">Gasolina/Etanol</option>
                                            <option value="Óleo diesel">Óleo diesel</option>
                                            <option value="Gás natural">Gás natural</option>
                                            <option value="Veículo Elétrico">Veículo Elétrico</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Ano do modelo</label>
                                        <input class="form-control" type="number" name="vehicle_model_year" placeholder="Ex. 2011">
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Ano da fabricação</label>
                                        <input class="form-control" type="number" name="vehicle_year_manufacture" placeholder="Ex. 2011">
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3">
                                        <label>Placa</label>
                                        <input class="form-control" type="text" name="vehicle_license_plate" placeholder="Ex. 28U8YG">
                                    </div>
                                </div>

                                <hr class="sidebar-divider d-none d-md-block">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label>Portas & Passageiros</label>
                                                                <select class="form-select mx-auto col-lg-12 col-md-12" name="vehicle_doors" multiple aria-label="multiple select example">
                                                                    <option value="2 Portas 2 Passageiros">2 Portas - 2 Passageiros</option>
                                                                    <option value="2 Portas 4 Passageiros">2 Portas - 4 Passageiros</option>
                                                                    <option value="2 Portas 5 Passageiros">2 Portas - 5 Passageiros</option>
                                                                    <option value="4 Portas 4 Passageiros">4 Portas - 4 Passageiros</option>
                                                                    <option value="4 Portas 5 Passageiros">4 Portas - 5 Passageiros</option>
                                                                    <option value="4 Portas 7 Passageiros">4 Portas - 7 Passageiros</option>
                                                                    <option value="Outros">Outros</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label>Transmissão</label>
                                                                <select class="form-select mx-auto col-lg-12 col-md-12" name="vehicle_streaming" multiple aria-label="multiple select example">
                                                                    <option value="Manual">Manual</option>
                                                                    <option value="Automática">Automática</option>
                                                                    <option value="Semiautomático">Semiautomático</option>
                                                                    <option value="Sequencial">Sequencial</option>
                                                                    <option value="Outros">Outros</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label>Modelos de lampadas</label>
                                                                <select class="form-select mx-auto col-lg-12 col-md-12" name="vehicle_lamps" multiple aria-label="multiple select example">
                                                                    <option value="H1">H1</option>
                                                                    <option value="H3">H3</option>
                                                                    <option value="H4">H4</option>
                                                                    <option value="H7">H7</option>
                                                                    <option value="H8">H8</option>
                                                                    <option value="H11">H11</option>
                                                                    <option value="HB3">HB3</option>
                                                                    <option value="HB4">HB4</option>
                                                                    <option value="Outros">Outros</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <hr class="sidebar-divider d-none d-md-block">
                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label>Pneu</label>
                                                <hr class="sidebar-divider d-none d-md-block">
                                                <div class="row">
                                                    <select class="form-select mx-auto col-lg-4 col-md-4" name="vehicle_tire_rim" multiple aria-label="multiple select example">
                                                        <option value="Aro 13">Aro 13</option>
                                                        <option value="Aro 14">Aro 14</option>
                                                        <option value="Aro 15">Aro 15</option>
                                                        <option value="Aro 16">Aro 16</option>
                                                        <option value="Aro 17">Aro 17</option>
                                                        <option value="Aro 18">Aro 18</option>
                                                        <option value="Aro 19">Aro 19</option>
                                                        <option value="Aro 20">Aro 20</option>
                                                        <option value="Aro 21">Aro 21</option>
                                                        <option value="Outros">Outros</option>
                                                    </select>
                                            
                                                    <select class="form-select mx-auto col-lg-7 col-md-7" name="vehicle_tire_brand" multiple aria-label="multiple select example">
                                                        <option value="Michelin">Michelin</option>
                                                        <option value="Pirelli">Pirelli</option>
                                                        <option value="Goodyear">Goodyear</option>
                                                        <option value="Technic">Technic</option>
                                                        <option value="Dunlop">Dunlop</option>
                                                        <option value="Bridgestone">Bridgestone</option>
                                                        <option value="Hankook">Hankook</option>
                                                        <option value="Maxxis">Maxxis</option>
                                                        <option value="Yokohama">Yokohama</option>
                                                        <option value="Outros">Outros</option>
                                                    </select>
                                                </div>
                                                <hr class="sidebar-divider d-none d-md-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    

                                    <hr class="sidebar-divider d-none d-md-block">

                                    <div class="card">
                                        <div class="card-body">
                                            <label>Endereço</label>
                                            <div class="row">
                                                <div class="form-group col-lg-9 col-md-9">
                                                    <label>Logradouro</label>
                                                    <input type="text" class="form-control" name="public_place_car" placeholder="Ex. Rua">
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3">
                                                    <label>Número</label>
                                                    <input class="form-control" type="number" name="number_car">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-groupcol-lg-8 col-md-8">
                                                    <label>Bairro</label>
                                                    <input class="form-control" type="text" name="district_car" placeholder="Ex. Jardim Das Flores">
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4">
                                                    <label>CEP</label>
                                                    <input class="form-control" type="number" name="cep_car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="sidebar-divider d-none d-md-block">

                                    <div class="form-group">
                                        <label>Observação</label>
                                        <textarea class="form-control" name="vehicle_observation" aria-label="With textarea" rows="1"></textarea>
                                    </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <button type="button" class="btn btn-success submit">Enviar</button>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabela de Veículo</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Modelo</th>
                                            <th>Marca</th>
                                            <th>Cor</th>
                                            <th>Quilômetro</th>
                                            <th>Combustível</th>
                                            <th>Transmissão</th>
                                            <th>Aro Pneu</th>
                                            <th>Pneu</th>
                                            <th>Lâmpada</th>
                                            <th>Modelo</th>
                                            <th>Fabricação</th>
                                            <th>Placa</th>
                                            <th>Portas & Passageiros</th>        
                                            <th>Logradouro</th>
                                            <th>Número</th>
                                            <th>Bairro</th>
                                            <th>CEP</th>
                                            <th>Observação</th>
                                            <th>Editar/Excluir</th>
                                        </tr>
                                    </thead>
                                        <?php    
                                            include "conexao.php";

                                            $query = "SELECT * FROM public.address_on AS A 
                                            INNER JOIN public.vehicle AS V ON A.fk_address_vehicle = V.pk_vehicle;";
                                                    
                                            $result = pg_query($dbconn, $query);

                                            while($row = pg_fetch_assoc($result)) { 
                                                echo  "<tr>
                                                            <td name=".$row['pk_vehicle'].">".$row['pk_vehicle']."</td>
                                                            <td>".$row['vehicle_model']."</td>
                                                            <td>".$row['vehicle_brand']."</td>
                                                            <td>".$row['vehicle_color']."</td>
                                                            <td>".$row['vehicle_kilometer']."</td>
                                                            <td>".$row['vehicle_fuel']."</td>
                                                            <td>".$row['vehicle_streaming']."</td>
                                                            <td>".$row['vehicle_tire_rim']."</td>
                                                            <td>".$row['vehicle_tire_brand']."</td>
                                                            <td>".$row['vehicle_lamps']."</td>
                                                            <td>".$row['vehicle_model_year']."</td>
                                                            <td>".$row['vehicle_year_manufacture']."</td>
                                                            <td>".$row['vehicle_license_plate']."</td>
                                                            <td>".$row['vehicle_doors']."</td>
                                                            <td name=".$row['fk_address_vehicle'].">".$row['address_public_place']." ".$row['employee_last_name']."</td>'
                                                            <td>".$row['address_number']."</td>
                                                            <td>".$row['address_district']."</td>
                                                            <td>".$row['address_cep']."</td>  
                                                            <td>".$row['vehicle_observation']."</td>"; ?>
                                                            <td><i class="fas fa-fw fa-edit col-auto"></i><i class="fas fa-fw fa-trash col-auto"></i></td>
                                                <?php echo "</tr>";    
                                            }            
                                        ?> 
                                    </tbody>
                                </table>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Tabledit -->
    <script src="vendor/jquery-tabledit/jquery.tabledit.js"></script>
    <script src="vendor/jquery-tabledit/jquery.tabledit.min.js"></script>

    <!-- Ajax -->
    <script src="vendor/jquery-ajax/car_ajax.js"></script>

</body>

</html>