<?php include 'partials/header.php' ?>

<div class="container">
<?php echo validation_errors(); ?>
<?php echo form_open('register/register_user'); ?>

	<h3>User Registration</h3>
  <hr>
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="fname">
  </div>
      <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lname">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pwd">
  </div>
  <div class="form-group">
    <label for="password">Confirm Password</label>
    <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="con_pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>

<?php include 'partials/footer.php'?>