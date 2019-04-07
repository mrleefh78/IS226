<h2><?php echo $department['id']; ?></h2>

<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  	<div class="form-group">
      <label for="description">Department Name</label>
      <input type="text" class="form-control" id="description" aria-describedby="text" placeholder="Department Name" value = "<?php echo $department['description']; ?>"> 
	</div>
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
<div class="col-md-2"></div>