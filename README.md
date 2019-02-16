# Combination Chart in PHP
## How to create combination chart in PHP
Creating a combination chart in PHP has never been easier before, especially when we are talking about UI less environment such as Linux, Apache, MySQL and PHP environment. Fortunately, there is a open source liberary available which is built in PHP, HTML, Javascript and Graphic Library. 

A combination chart is combine from different types of charts. For example a combination of line, bar, are etc. To be noted that the series of chart type are rendered in the order they appear in trace array and as a result, they overlap others. Line chart, bar chart, area charts, histogram or scatter chats cannot be combined with any other chart type.

### Creating a dynamic combination chart in PHP using Dashboard Builder.
<p style="text-align:center;"><img src="https://raw.githubusercontent.com/DashboardBuilder/combination-chart-php/master/img/combination-chart.png" alt="Combination chart in PHP" title="Combination chart in PHP" /></p>

Dashboard Builder helps you to create combination chart with a drag and drop tool as well as simple PHP coding and a SQL engine with ease. Dashboard Builder also generates PHP source code for you to use it anywhere in your application.

Dashboard Builder makes users to able to connect a huge range of database using PDO, the most widely used data connection for retrieving data in open source platform such as MySQL, MS SQL, SQLite, PostgreSQL, Sybase and Cubrid, CSV and MS EXCEL files. The users can download their combination charts in PNG image format as well. Dashboard Builder has the most powerful drag-and-drop features to create combination chart in a minutes.

Our combination charts are pure dynamic, which uses D3.js library, the most widely used JavaScript library for presenting dynamic and interactive data in the browsers using SVG and HTML5 standards. These charts are fully responsive to fit in PC, mobile phone and tablets devices using the most powerful CSS and JQuery framework. 

### Getting Started

In this example, we will be creating a simple combination chart by fetching data from SQLite database Northwind.db. To do this, we will be going to demonstrate with our <a href="https://dashboardbuilder.net/dashboard-builder-free-download" title="Download Dashboard Builder FREE">Dashboard Builder FREE verion </a>. Following are the requirements to install and run the Dashboard Builder. 

Requirements
==
This open source dashboard can be installed any platforms like Windows, Linux and Ubuntu or any other platforms support Apache, Nginx etc.

- [x] PHP Version 5.6 or later
- [x] Apache 2 or later
- [x] Windows 7 or later /Linux 3 or later
- [x] Firefox 52, Chrome 57, IE 8

Installation
==
There is a Free version of Dashboard Builder is available for trail bases.

1. Download from https://dashboardbuilder.net/download-free-dashboard
2. Place the files in a directory on the web server. e.g. …/www/dashboar/dbuilder/
3. Unzip  the file using Extract Here option to the root folder of "dashboardbuilder"

### Combination chart example

Before getting started we have to make sure that you Web Server like Apache, Nginx, etc., in place and is configured to display the folders which will contain dashboard with Read-Write permission to the folders and sub-folders of dashboardbuilder. To do so, you may use chmod -R 777 dashbboardbuilder-v3-FREE and check your browser inspector/console to make sure that there isn't any error being reported, and all the Dashboard builder files are being loaded properly. 

### Combination chart PHP source code
This PHP source code for our combinatino chart is released under MIT license, the most popular software license on GitHub, ahead of any GPL variant and other free and open-source software (FOSS) licenses. 

## PHP Source Code

```
<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2019 Dashboardbuilder.net
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

```
### MIT License
This MIT license puts very limited restriction on reuse and has, therefore, an excellent license compatibility. This license permits you to reuse within proprietary the source code generated by our Dashboard Builder, provided that all copies of the source code include a copy of the MIT License terms and the copyright notice. This license is also compatible with many copyleft licenses, such as the GNU General Public License (GPL). The source code generated by this tool, can be integrated into GPL software.

The auto-generated PHP code allows you to customize as per your desire needs and can be used an anywhere you want. You can find the complete information about the <a href="https://dashboardbuilder.net/code-license">license here </a>

### Conclusion
Now we have PHP code for our combination chart which we can use with any web application that was customized to fit the requirements of the web design. Dashboard Builder also offers free and paid plans. You can also download <a href="https://dashboardbuilder.net/dashboard-builder-free-download">Dashboard Builder FREE version</a>. 

Best of all, with our Standard and Enterprise licenses include 100% source code, for you to enhance the functionality or incorporate the Open Source Dashboard into your web application or any PHP software solutions/products, analytics/data science/data warehouse enterprise systems or Joomla, Wordpress or Drupal sites.

All editions of our Open Source Dashboard series are still fully functional, for sale and supported and provides increasing levels of support to address the queries of users and developers.

Dashboard Builder can also be implemented using an online API where you don’t have to mix with PHP code. The online API uses universal HTML code which can be used in any platform. The data will be added or retrieved from the database using the API. You may find more information about the <a href="https://dashboardbuilder.net/online-dashboard">Online Dashboard</a>.


You may want to take a look at our <a href="https://dashboardbuilder.net/documentation">complete documentation</a> and video tours of the latest version along with a <a href="https://dashboardbuilder.net/live-dashboard/lib">live tour</a> of user interface and step by step instructions for performing key features.
