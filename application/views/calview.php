<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<style type="text/css">
	table{
border: 15px solid #25BAE4;
border-collapse:collapse;
margin-top: 50px;
margin-left: 250px;
}
td{
width: 50px;
height: 50px;
text-align: center;
border: 1px solid #e2e0e0;
font-size: 18px;
font-weight: bold;
}
th{
height: 50px;
padding-bottom: 8px;
background:#25BAE4;
font-size: 20px;
}
.prev_sign a, .next_sign a{
color:white;
text-decoration: none;
}
tr.week_name{
font-size: 16px;
font-weight:400;
color:red;
width: 10px;
background-color: #efe8e8;
}
.highlight{
background-color:#25BAE4;
color:white;
height: 27px;
padding-top: 13px;
padding-bottom: 7px;
}
.calender .days td
{
	width: 80px;
	height: 80px;
}
.calender .hightlight
{
	font-weight: 600px;
}
.calender .days td:hover
{
	background-color: #DEF;
}
</style>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#"><class="text-warning">TEAM05</a>
    <div class="nav-collapse collapse">
	<p class="navbar-text pull-right">
	<!--RIGHT TOP CONTENT-->
             <?php if($this->session->userdata('logged_in')) : ?>
               Welcome,  <?php echo $this->session->userdata('username'); ?>
             <?php else : ?>
                <a href="<?php echo base_url(); ?>users/register">Register</a>
             <?php endif; ?>
            </p>
	<ul class="nav">
              <li><a href="<?php echo base_url(); ?>">Tasks</a></li>
               <?php if($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>lists">Monitoring</a></li>
                    <li><a href="<?php echo base_url(); ?>Mycal">Calendar</a></li>  
               <?php endif; ?>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
          <div style="margin:0 0 10px 10px;">
			<!--SIDEBAR CONTENT-->
			<?php $this->load->view('users/login'); ?>
          </div>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">
	<h1>Welcome to Android Task Monitoring System!</h1>
<p>Android Task Monitoring System is a simple and helpful application to help you manage your day to day tasks. You can add as many task lists as you want and as many tasks as you want. Android Task Monitoring System is absolutely free! Have fun.</p>
<p>This system was created by TEAM05 from BSIS-NS-3C/D.</p>
<p>The proponents:</p>
<ul>
  <li>Leader: De Real, Christopher</li>
  <li>Balderas, John Roland</li>
  <li>Dela Cruz, Janwry</li>
  <li>Fernandez, Renald</li>
  <li>Lamangan, Raissel</li>
  <li>Sabile, Aubrey</li>
</ul>
<p>For urgent inquiries, or indeed any inquiries, please contact De Real, Christopher at christopher.dereal@tup.edu.ph.</p>
<h2>Calendar</h2>
	<div id="body">
		<?php echo $calender; ?>
	</div>

	
</div>
</div><!--/row-->
      <hr>

      <footer>
        <p>&copy; Copyright 2022 by TEAM05 BSIS-NS-3C/D</p>
      </footer>
    </div><!--/.fluid-container-->
</body>
</html>