<?php   
    include "conexao.php";
    $year = date('Y');
    
    $chart_row_jan = 0;
    $chart_query_jan = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '01-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '01-$year';";
    $chart_result_jan = pg_query($dbconn, $chart_query_jan);
    $chart_row_jan = pg_fetch_row($chart_result_jan);  
?>
<input type="hidden" id="chart_jan" value="<?php echo $chart_row_jan[0];?>">
<?php
    $chart_row_fev = 0;
    $chart_query_fev = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '02-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '02-$year';";
    $chart_result_fev = pg_query($dbconn, $chart_query_fev);
    $chart_row_fev = pg_fetch_row($chart_result_fev); 
?>
<input type="hidden" id="chart_fev" value="<?php echo $chart_row_fev[0];?>">
<?php
    $chart_row_mar = 0;
    $chart_query_mar = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '03-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '03-$year';";
    $chart_result_mar = pg_query($dbconn, $chart_query_mar);
    $chart_row_mar = pg_fetch_row($chart_result_mar);
?>
<input type="hidden" id="chart_mar" value="<?php echo $chart_row_mar[0];?>">
<?php
    $chart_row_abr = 0;
    $chart_query_abr = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '04-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '04-$year';";
    $chart_result_abr = pg_query($dbconn, $chart_query_abr);
    $chart_row_abr = pg_fetch_row($chart_result_abr); 
?>
<input type="hidden" id="chart_abr" value="<?php echo $chart_row_abr[0];?>">
<?php
    $chart_row_mai = 0;
    $chart_query_mai = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '05-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '05-$year';";
    $chart_result_mai = pg_query($dbconn, $chart_query_mai);
    $chart_row_mai = pg_fetch_row($chart_result_mai); 
?>
<input type="hidden" id="chart_mai" value="<?php echo $chart_row_mai[0];?>">
<?php
    $chart_row_jun = 0;
    $chart_query_jun = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '06-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '06-$year';";
    $chart_result_jun = pg_query($dbconn, $chart_query_jun);
    $chart_row_jun = pg_fetch_row($chart_result_jun); 
?>
<input type="hidden" id="chart_jun" value="<?php echo $chart_row_jun[0];?>">
<?php
    $chart_row_jul = 0;
    $chart_query_jul = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '07-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '07-$year';";
    $chart_result_jul = pg_query($dbconn, $chart_query_jul);
    $chart_row_jul = pg_fetch_row($chart_result_jul); 
?>
<input type="hidden" id="chart_jul" value="<?php echo $chart_row_jul[0];?>">
<?php
    $chart_row_ago = 0;
    $chart_query_ago = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '08-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '08-$year';";
    $chart_result_ago = pg_query($dbconn, $chart_query_ago);
    $chart_row_ago = pg_fetch_row($chart_result_ago); 
?>
<input type="hidden" id="chart_ago" value="<?php echo $chart_row_ago[0];?>">
<?php
    $chart_row_set = 0;
    $chart_query_set = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '09-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '09-$year';";
    $chart_result_set = pg_query($dbconn, $chart_query_set);
    $chart_row_set = pg_fetch_row($chart_result_set); 
?>
<input type="hidden" id="chart_set" value="<?php echo $chart_row_set[0];?>">
<?php
    $chart_row_out = 0;
    $chart_query_out = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '10-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '10-$year';";
    $chart_result_out = pg_query($dbconn, $chart_query_out);
    $chart_row_out = pg_fetch_row($chart_result_out); 
?>
<input type="hidden" id="chart_out" value="<?php echo $chart_row_out[0];?>">
<?php
    $chart_row_nov = 0;
    $chart_query_nov = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '11-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '11-$year';";
    $chart_result_nov = pg_query($dbconn, $chart_query_nov);
    $chart_row_nov = pg_fetch_row($chart_result_nov); 
?>
<input type="hidden" id="chart_nov" value="<?php echo $chart_row_nov[0];?>">
<?php
    $chart_row_dez = 0;
    $chart_query_dez = "SELECT sum(distance_value) FROM public.distance WHERE TO_CHAR(distance_date_input, 'MM-YYYY') = '12-$year' AND TO_CHAR(distance_date_exit, 'MM-YYYY') = '12-$year';";
    $chart_result_dez = pg_query($dbconn, $chart_query_dez);
    $chart_row_dez = pg_fetch_row($chart_result_dez);                                                         
?>
<input type="hidden" id="chart_dez" value="<?php echo $chart_row_dez[0];?>">
<?php
    return;
?>