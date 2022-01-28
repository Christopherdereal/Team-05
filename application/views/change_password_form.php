<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
   }
   input[type="checkbox"]
   {
    top: 40px;
    right: 100px;
    cursor: pointer;
    -webkit-appearance: none;
   }
   input[type="checkbox"]:before
   {
    content: 'Dark';
    position: absolute;
    color: #fff;
    background: #000;
    padding:  10px 20px;
   }
   input[type="checkbox"]:checked ~ *
   {
   filter: invert(1);
   }
</style>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
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
                     <li><a href="<?php echo base_url(); ?>user/update_password">Account Settings</a></li>  
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
  <h1>Account Settings</h1>
</head>
<body>
  <h2>Change Theme Type</h2>
  <input type="checkbox"  name="">
  <br />
  <br />
  <br />
<h2>Change Password</h2>
<div><?php echo validation_errors() ?>
<?php if(isset($message)){
  echo $message;
}

?>
</div>
<div class="container box">
  <form method="post" action="<?=base_url('user/update_password')?>">
    <div class="row">
      <div class="col-25">
        <label for="old_password">Old Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="old_password" name="old_password" placeholder="Old Password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="new_password">New Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="new_password" name="new_password" placeholder="New Password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="confirm_password">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
      </div>
    </div>


    <div class="row">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
    </div>
  </form>
</div> 
         <h2>Change Ringtone Type</h2>
         <div class="container box">
         <h4>Please Select a Ringtone</h4><br />  
         <form>
<table>
    <tr>
        <td><input type="radio" name="ringtone[]" value="Ringtone 1" />  Ringtone 1</td>
        <td><a href="https://drive.google.com/file/d/1Kq35qFHsXarXSALIn4clnocyR8RaD9Yi/view?usp=sharing">Listen</a></td>
    </tr>
    <tr>
        <td><input type="radio" name="ringtone[]" value="Ringtone 2" /> Ringtone 2</td>
        <td><a href="https://drive.google.com/file/d/1HQ3UKVm-L_LGYktQXGd8ZVvzp4RhoHI7/view?usp=sharing">Listen</a></td>
    </tr>
    <tr>
        <td><input type="radio" name="ringtone[]" value="Ringtone 3" /> Ringtone 3</td>
        <td><a href="https://drive.google.com/file/d/1KjmG7gNpMlH7AnixAscDNpZrvN9dEdh5/view?usp=sharing">Listen</a></td>
    </tr>
</table>
 <br />
<p><input type="submit" name="submit" class="btn btn-info" value="Update" /></p>
</form>
</div>
<h2>Change Font Type</h2>
<div class="container box">
  <h4>Please Select a Font</h4><br /> 
  <form>
   <table>
    <tr>
        <td><input type="radio" name="font[]" value="Font Type 1" />  Open Sans</td>
    </tr>
    <tr>
        <td><input type="radio" name="font[]" value="Font Type 2" /> Roboto</td>
    </tr>
    <tr>
        <td><input type="radio" name="font[]" value="Font Type 3" /> Lato</td>
    </tr>
    <tr>
        <td><input type="radio" name="font[]" value="Font Type 4" /> Helvetica</td>
    </tr>
</table>
  <br />
  <p><input type="submit" name="submit" class="btn btn-info" value="Update" /></p>
  <br />
  </form>
</div><!--/row-->
      <hr>

      <footer>
        <p>&copy; Copyright 2022 by TEAM05 BSIS-NS-3C/D</p>
      </footer>
    </div><!--/.fluid-container-->
</body>
</html>
