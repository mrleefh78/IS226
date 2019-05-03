<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('release/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="release_id" name="release_id" aria-describedby="text" placeholder="ID" value = "<?php echo $release['release_id']; ?>">
    
  <div class="form-group">
      <label for="req_date">Request Date</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" placeholder="Request Date" value = "<?php echo $release['req_date']; ?>">
      
    </div>

    <div class="form-group">
      <label for="contact_person">Request Reference</label>
      <?php echo form_dropdown('req_id', $ref, $release['req_id'], 'class="form-control"');?> 
     
    </div>
    <!-- <div class="form-group">
      <label for="contact_person">Department</label>
      <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department" value = "<?php echo $release['dept_id']; ?>">
      
    </div>

    <div class="form-group">
      <label for="location_id">Location</label>
      <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location" value = "<?php echo $release['location_id']; ?>">
      
    </div> -->

       
    <div class="form-group">
      <label for="email">Release By</label>
      <input type="text" class="form-control" id="req_by" name="req_by"  aria-describedby="req_by" placeholder="Requested By" value = "<?php echo $release['rel_by']; ?>">
      
    </div>

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
      <label for="req_notes">Notes</label>
      <textarea class="form-control" id="req_notes" name="req_notes"  rows="3"><?php echo $release['req_notes']; ?></textarea>
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
</form>

<div>
<h3>List of Items</h3>
</div>
<div>

<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Request ID</th>
       <th scope="col">Item</th>
      <th scope="col">Quantity</th>     
      <th scope="col">Unit of Measurement</th> 
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($requestitems as $req) : ?>
  <tr class="table-secondary">
 
      <td><?php echo $req['id']; ?></td>
      <td><?php echo $req['req_id']; ?></td>
       <td><?php echo $req['item_name']; ?></td>
        <td><?php echo $req['quantity']; ?></td>        
      <td><?php echo $req['uom']; ?></td>
              
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>
</div>



<br>


<div class="col-md-2"></div>
