<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2018 Dashboardbuilder.net
 * @version 3.0
 * @license: This code is under MIT license, you can find the complete information about the license here: https://dashboardbuilder.net/code-license
 */

include("inc/dashboard_dist.php");  // copy this file to inc folder 


// for chart #1
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";
$data->type[1]=  "line";

$data->source =  "Database"; 
$data->rdbms =  "sqlite"; 
$data->servername =  "";
$data->username =  "";
$data->password =  "";
$data->dbname =  "data/Northwind.db";
$data->xaxisSQL[0]=  "SELECT strftime(^%Y-%m^,o.shippeddate) as xaxis, sum(d.quantity) as yaxis from `order details` d, orders o where o.orderid = d.orderid group by strftime(^%Y-%m^,o.orderdate) limit 50";
$data->xaxisCol[0]=  "xaxis";
$data->xaxisSQL[1]=  "SELECT strftime(^%Y-%m^,o.shippeddate) as xaxis, sum(d.quantity) as yaxis from `order details` d, orders o where o.orderid = d.orderid group by strftime(^%Y-%m^,o.orderdate) limit 50";
$data->xaxisCol[1]=  "xaxis";
$data->yaxisSQL[0]=  "SELECT strftime(^%Y-%m^,o.shippeddate) as xaxis, sum(d.quantity) as yaxis from `order details` d, orders o where o.orderid = d.orderid group by strftime(^%Y-%m^,o.orderdate) limit 50";
$data->yaxisCol[0]=  "yaxis";
$data->yaxisSQL[1]=  "SELECT strftime('%Y-%m',o.shippeddate) as xaxis, sum(d.quantity) as yaxis from `order details` d, orders o where o.orderid = d.orderid group by strftime('%Y-%m',o.orderdate) limit 50";
$data->yaxisCol[1]=  "yaxis";

$data->name = "0";
$data->title = "";
$data->orientation = "v";
$data->xaxistitle = "";
$data->yaxistitle = "";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "380";
$data->width = "";
$data->col = "0";
$data->color[0]=  "#1AA7FF";

$result[0] = $data->result();?>

<!DOCTYPE html>
<html>
<head>
	<script src="assets/js/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- Bootstrap CSS file, change the path accordingly -->
	
<style>
@media screen and (min-width: 960px) {
.id0 {position:absolute;margin-top:0px;}

}
.panel-heading {line-height:0.7em;}
#kpi {font-size:34px; font-weight:bold;text-align:center;}
#kpi_legand {font-size:11px; color:#999;text-align:center;}
</style>
</head>
<body> 
<div class="container-fluid main-container">
<div class="col-md-12 col-lg-12 col-xs-12">
<div class="row">
<div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 col-xs-12 id0">
<div class="panel panel-default">
<div class="panel-heading">Bar Chart</div>
	<div class="panel-body">
		<?php echo $result[0];?>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
