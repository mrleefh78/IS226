<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('pages/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="text" placeholder="User Name">
      
    </div>
    
      
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="text" placeholder="Password">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" id="contact_no" name="first_name" aria-describedby="text" placeholder="First Name">
      
    </div>
   
     <div class="form-group">
      <label for="exampleInputEmail1">Last Name</label>
      <input type="text" class="form-control" id="contact_no" name="last_name" aria-describedby="text" placeholder="Last Name" >
      
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email" ">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
