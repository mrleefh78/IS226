<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('locations/create', $entries); ?>
  <fieldset>
    
  	<div class="form-group">
      <label for="LocationName">Location Name</label>
      <input type="text" class="form-control" id="description" name="description" aria-describedby="text" placeholder="Location Name">     
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
<div class="col-md-2"></div>
