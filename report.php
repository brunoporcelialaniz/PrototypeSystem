<?php
    include "conexao.php";

//    $date_start = $_POST['date_start'];
//    $date_end = $_POST['date_end'];
    $date_start = '2022-03-01';    
    $date_end = '2022-03-30';

    $query_date = "SELECT sum(distance_value) FROM public.distance WHERE distance_date_input >= '$date_start' AND distance_date_exit <= '$date_end';";
    $result_date = pg_query($dbconn, $query_date);
    $row_date = pg_fetch_row($result_date);

    $query_percentage_report = "SELECT round((COUNT(*)*100) / (SELECT COUNT(*) FROM public.vehicle)) FROM public.maintenance WHERE maintenance_date_input >= '$date_start' AND maintenance_date_exit <= '$date_end';";
    $result_percentage_report = pg_query($dbconn, $query_percentage_report);
    $row_percentage_report = pg_fetch_row($result_percentage_report);

    $query_report = "SELECT count(*) FROM public.maintenance WHERE maintenance_date_input >= '$date_start' AND maintenance_date_exit <= '$date_end';";
    $result_report = pg_query($dbconn, $query_report);
    $row_report = pg_fetch_row($result_report); 

    $query_table_report = "SELECT employee_fist_name, employee_last_name, vehicle_model, vehicle_brand, company_name, company_activity, maintenance_date_input, maintenance_date_exit FROM public.maintenance AS M 
    INNER JOIN public.employee AS E ON E.pk_employee = M.fk_maintenance_employee
    INNER JOIN public.vehicle AS V ON V.pk_vehicle = M.fk_maintenance_vehicle
    INNER JOIN public.company AS C ON C.pk_company = M.fk_maintenance_company WHERE maintenance_date_input >= '$date_start' AND maintenance_date_exit <= '$date_end';";
                            
    $result_table_report = pg_query($dbconn, $query_table_report);
    
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description">
        <meta name="author">

        <title>Sistema de gerenciamento veicular</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head> 
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="card">
                        <h5 class="card-title m-3">Relatório do período <?php echo $date_start;?> até <?php echo $date_end;?></h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gasto Diário</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo $row_date[0];?></div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Veículos em manutenção</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row_percentage_report[0];?>%</div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de veículo em manutenção</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row_report[0];?></div>
                    </div>
                    </div>
                </div>
            </div>
            
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Funcionário</th>
                        <th scope="col">Veículo</th>
                        <th scope="col">Atividade</th>
                        <th scope="col">Entrada em Manutenção</th>
                        <th scope="col">Data Prevista para Saida</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;   
                        while($row = pg_fetch_assoc($result_table_report)) { 
                            echo  "<tr>
                                <th>".$i."</th>
                                <td>".$row['employee_fist_name']." ".$row['employee_last_name']."</td>
                                <td>".$row['vehicle_model']." ".$row['vehicle_brand']."</td>
                                <td>".$row['company_name']." - ".$row['company_activity']."</td>
                                <td>".$row['maintenance_date_input']."</td>
                                <td>".$row['maintenance_date_exit']."</td>
                                <tr>";
                            $i ++;   
                        }          
                    ?>
                </tbody>
            </table>
        </div>  
    </body> 
</html>";

<?php
    //wkhtmltopdf http://localhost/report.php Relatório.pdf
?>