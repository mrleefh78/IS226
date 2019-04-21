<h2>Create User</h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('pages/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="user_name">User Name</label>
      <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="text" placeholder="User Name">      
  </div> 
  <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="text" placeholder="Password">
  </div>
  <div class="form-group">
      <label for="contact_no">First Name</label>
      <input type="text" class="form-control" id="contact_no" name="first_name" aria-describedby="text" placeholder="First Name">      
  </div>   
  <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="contact_no" name="last_name" aria-describedby="text" placeholder="Last Name" >      
  </div>
  <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email" ">      
  </div>

  <div class="form-group">      

        <!--dropdown input--> 
        <label class="title">Account Type </label> 
        <?php echo form_dropdown('account_type', $options, '', 'class="form-control"');?> 
            
  </div> 
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
<div class="col-md-2"></div>
