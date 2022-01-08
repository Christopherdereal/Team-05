<!--Display Messages-->
<?php if($this->session->flashdata('registered')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('registered') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('need_login')) : ?>
    <?php echo '<p class="text-error">' .$this->session->flashdata('need_login') . '</p>'; ?>
<?php endif; ?>

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
<?php if($this->session->userdata('logged_in')) : ?>
<br />
<!--Display Errors-->
<?php endif; ?>