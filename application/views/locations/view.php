<h2><?php echo $location['id']; ?></h2>

<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  	<div class="form-group">
      <label for="description">Location Name</label>
      <input type="text" class="form-control" id="description" aria-describedby="text" placeholder="Location Name" value = "<?php echo $location['description']; ?>"> 
	</div>
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
<div class="col-md-2"></div>