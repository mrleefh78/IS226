<h2><?php echo $request['pr']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="supplier_name">ID</label>
      <input type="text" class="form-control" id="pr_id" aria-describedby="text" placeholder="Request ID" value = "<?php echo $request['req_id']; ?>">
      
    </div>
   
  <div class="form-group">
      <label for="req_date">Request Date</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" placeholder="Request Date" value = "<?php echo $pr['req_date']; ?>">
      
    </div>

    <div class="form-group">
      <label for="pr_no">PR No</label>
      <input type="text" class="form-control" id="pr_no" name="pr_no" aria-describedby="text" placeholder="PR No" value = "<?php echo $pr['dept_id']; ?>">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Department</label>
      <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department" value = "<?php echo $pr['dept_id']; ?>">
      
    </div>

    <div class="form-group">
      <label for="location_id">Location</label>
      <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location" value = "<?php echo $pr['location_id']; ?>">
      
    </div>

       
    <div class="form-group">
      <label for="email">Requested By</label>
      <input type="text" class="form-control" id="req_by" name="req_by"  aria-describedby="req_by" placeholder="Requested By" value = "<?php echo $pr['req_by']; ?>">
      
    </div>

    <div class="form-group">
      <label for="email">Status</label>
      <select id = "myList" class="form-control">
               <option value = "Approved">Approved</option>
               <option value = "Rejected">Rejected</option>
             
             </select>
      <!-- <input type="text" class="form-control" id="status" name="status"  aria-describedby="status" placeholder="Status" value = "<?php echo $request['status']; ?>"> -->
      
    </div>
  

    <div class="form-group">
      <label for="req_notes">Notes</label>
      <textarea class="form-control" id="req_notes" name="req_notes"  rows="3"><?php echo $pr['req_notes']; ?></textarea>
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>