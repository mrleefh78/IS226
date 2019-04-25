<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('requests/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="req_date">Supplier Name</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" placeholder="Request Date">
      
    </div>
    <div class="form-group">
      <label for="department">Contact Person</label>
      <input type="text" class="form-control" id="department" name="department" aria-describedby="text" placeholder="Department">
      
    </div>
    
    <div class="form-group">
      <label for="location">Contact Person</label>
      <input type="text" class="form-control" id="location" name="location" aria-describedby="text" placeholder="Location">
      
    </div>
    
    

    <div class="form-group">
      <label for="req_by">Contact no</label>
      <input type="text" class="form-control" id="contact_no" name="contact_no" aria-describedby="text" placeholder="Contact No">
      
    </div>
    <div class="form-group">
      <label for="req_notes">Address</label>
      <textarea class="form-control" id="address" name="address"  rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
