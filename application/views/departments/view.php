<h2><?php echo $department['id']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="DepartmentName">Department Name</label>
      <input type="text" class="form-control" id="DepartmentName" aria-describedby="text" placeholder="Department Name" value = "<?php echo $department['description']; ?>"> 

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>