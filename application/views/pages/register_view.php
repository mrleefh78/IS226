<h2><?php echo $user['user_id']; ?></h2>

<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
    <div class="form-group">
      <label for="user_name">User Name</label>
      <input type="text" class="form-control" id="user_name" aria-describedby="text" placeholder="User Name" value = "<?php echo $user['user_name']; ?>">      
    </div>

    <div class="form-group">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="first_name" aria-describedby="text" placeholder="First Name" value = "<?php echo $user['contact_person']; ?>">      
    </div>

    <div class="form-group">
      <label for="last_name">First Name</label>
      <input type="text" class="form-control" id="last_name" aria-describedby="text" placeholder="Last Name" value = "<?php echo $user['contact_person']; ?>">      
    </div>    
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $user['email']; ?>"> 
       
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
