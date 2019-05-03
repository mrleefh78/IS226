<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('pr/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="pr_id" name="pr_id" aria-describedby="text" placeholder="ID" value = "<?php echo $pr['pr_id']; ?>">
    
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
      <!-- <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department" value = "<?php echo $request['dept_id']; ?>"> -->
      <?php echo form_dropdown('dept_id', $dept, $pr['dept_id'], 'class="form-control"');?> 
     
    </div>

    <div class="form-group">
      <label for="location_id">Location</label>
      <!-- <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location" value = "<?php echo $request['location_id']; ?>"> -->
      <?php echo form_dropdown('location_id', $loc, $pr['location_id'], 'class="form-control"');?> 
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

    
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#additem1" onclick="location.href='<?php echo base_url(); ?>pr/additem/<?php echo $pr['pr_id']; ?>';" >Add New Items</button>
  </fieldset>
</form>


<h2>List of Items</h2>
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">ID</th>
      <th scope="col">PR ID</th>
       <th scope="col">Item</th>
      <th scope="col">Quantity</th>     
      <th scope="col">Unit of Measurement</th> 
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($pritems as $req) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>pr/edititem/<?php echo ($req['id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('pr/deleteitem/' .$req['id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $req['id']; ?></td>
      <td><?php echo $req['pr_id']; ?></td>
       <td><?php echo $req['item_name']; ?></td>
        <td><?php echo $req['quantity']; ?></td>        
      <td><?php echo $req['uom']; ?></td>
              
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>
</div>
<div class="col-md-2"></div>



