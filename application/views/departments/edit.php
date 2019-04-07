<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('departments/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="id" name="id" aria-describedby="text" placeholder="Department Name" value = "<?php echo $department['id']; ?>">
    
  	<div class="form-group">
      <label for="DepartmentName">Department Name</label>
      <input type="text" class="form-control" id="description" name="description" aria-describedby="text" placeholder="Department Name" value = "<?php echo $department['description']; ?>">      
  	</div>     
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
<div class="col-md-2"></div>
