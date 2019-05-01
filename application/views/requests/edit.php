<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('requests/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="req_id" name="req_id" aria-describedby="text" placeholder="ID" value = "<?php echo $request['req_id']; ?>">
    
  <div class="form-group">
      <label for="req_date">Request Date</label>
      <input type="text" class="form-control" id="req_date" name="req_date" aria-describedby="text" placeholder="Request Date" value = "<?php echo $request['req_date']; ?>">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Department</label>
      <!-- <input type="text" class="form-control" id="dept_id" name="dept_id" aria-describedby="text" placeholder="Department" value = "<?php echo $request['dept_id']; ?>"> -->
      <?php echo form_dropdown('dept_id', $dept, $request['dept_id'], 'class="form-control"');?> 
     
    </div>

    <div class="form-group">
      <label for="location_id">Location</label>
      <!-- <input type="text" class="form-control" id="location_id" name="location_id" aria-describedby="text" placeholder="Location" value = "<?php echo $request['location_id']; ?>"> -->
      <?php echo form_dropdown('location_id', $loc, $request['location_id'], 'class="form-control"');?> 
    </div>

       
    <div class="form-group">
      <label for="email">Requested By</label>
      <input type="text" class="form-control" id="req_by" name="req_by"  aria-describedby="req_by" placeholder="Requested By" value = "<?php echo $request['req_by']; ?>">
      
    </div>

    <!-- <div class="form-group">
      <label for="email">Status</label>
      <select id = "myList" class="form-control">
               <option value = "Approved">Approved</option>
               <option value = "Rejected">Rejected</option>
             
             </select>
      
    </div> -->
  

    <div class="form-group">
      <label for="req_notes">Notes</label>
      <textarea class="form-control" id="req_notes" name="req_notes"  rows="3"><?php echo $request['req_notes']; ?></textarea>
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
    <!-- <button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#additem" >Add Items</button> -->
    <button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#additem1" onclick="location.href='<?php echo base_url(); ?>requests/additem/<?php echo $request['req_id']; ?>';" >Add New Items</button>
    <div></div>    
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
      <th scope="col">Request ID</th>
       <th scope="col">Item</th>
      <th scope="col">Quantity</th>     
      <th scope="col">Unit of Measurement</th> 
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($requestitems as $req) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>requests/edititem/<?php echo ($req['id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('requests/deleteitem/' .$req['id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
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


<!-- Modal -->
<div id="additem" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <?php echo validation_errors(); ?>
<?php $itementries = array("name" => "createform");
echo form_open('requests/additem', $itementries); ?>
  <fieldset>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Add Items</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
      <input type="hidden" class="form-control" id="req_id" name="req_id" aria-describedby="text" placeholder="ID" value = "<?php echo $request['req_id']; ?>">
      <div class="form-group">
      <label for="email">Item</label>
      <input type="text" class="form-control" id="item_id" name="item_id"  aria-describedby="item_id" placeholder="Item" >
      
    </div>
    <div class="form-group">
      <label for="email">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="quantity"  aria-describedby="quantity" placeholder="Quantity">
      
    </div>
    <div class="form-group">
      <label for="uom">Unit</label>
      <input type="text" class="form-control" id="uom" name="uom"  aria-describedby="uom" placeholder="Unit" >
      
    </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" >Save</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </fieldset>
</form>


  </div>
</div>
</div>
<div class="col-md-2"></div>







