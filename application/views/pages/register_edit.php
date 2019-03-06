<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('pages/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="user_id" name="user_id" aria-describedby="text" placeholder="User Name" value = "<?php echo $user['user_id']; ?>">
    
  <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="text" placeholder="User Name" value = "<?php echo $user['user_name']; ?>">
      
    
       <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="text" placeholder="Password" value = "<?php echo $user['user_password']; ?>">
      
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="text" placeholder="First Name" value = "<?php echo $user['first_name']; ?>">
      
    </div>
   
     <div class="form-group">
      <label for="exampleInputEmail1">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="text" placeholder="Last Name" value = "<?php echo $user['last_name']; ?>">
      
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $user['user_email']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
