<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('release/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="req_date">Release Date</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" value =<?php echo date('Y-m-d'); ?> placeholder="Request Date">
      
    </div>

    <div class="form-group">
      <label for="contact_person">Request Reference</label>
      <?php echo form_dropdown('req_id', $ref, '', 'class="form-control"');?> 
      <button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="window.open('<?php echo base_url(); ?>requests/edit/<?php echo '6' ?> ')"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button>
    </div>
    <!-- <div class="form-group">
      <label for="department">Department</label>
      <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department">
      
    </div>
    
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location">
      
    </div> -->
    
    <div class="form-group">
      <label for="email">Status</label>
      <select id = "myList" class="form-control" name="status">
               <option value = "Approved">Approved</option>
               <option value = "Approved">Pending</option>
               <option value = "Rejected">Rejected</option>
             
             </select>
      <!-- <input type="text" class="form-control" id="status" name="status"  aria-describedby="status" placeholder="Status" value = "<?php echo $release['status']; ?>"> -->
      
    </div>

    <div class="form-group">
      <label for="req_by">Release By</label>
      <input type="text" class="form-control" id="contact_no" name="req_by" aria-describedby="text" placeholder="Release By">
      
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
