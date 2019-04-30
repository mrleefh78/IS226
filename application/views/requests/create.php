<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('requests/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="req_date">Request Date</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" value =<?php echo date('Y-m-d'); ?> placeholder="Request Date">
      
      </div>
    <div class="form-group">
      <label for="department">Department</label>
      <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department">
      
    </div>
    
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location">
      
    </div>
    
    

    <div class="form-group">
      <label for="req_by">Requested By</label>
      <input type="text" class="form-control" id="contact_no" name="req_by" aria-describedby="text" placeholder="Requested By">
      
    </div>
    <div class="form-group">
      <label for="req_notes">Notes</label>
      <textarea class="form-control" id="req_notes" name="req_notes"  rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
