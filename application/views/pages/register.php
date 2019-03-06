<h2>Registration</h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php echo form_open('pages/register_view'); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="username">User Name</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="text" placeholder="User Name">
      
    </div>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="text" placeholder="First Name">
      
    </div>
    
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="text" placeholder="Last Name">
      
    </div>

    <div class="form-group">
      <label for="email">Email ID</label>
      <input type="text" class="form-control" id="email" name="email" aria-describedby="text" placeholder="Email">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
