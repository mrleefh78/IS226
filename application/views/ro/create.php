<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('ro/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="po_date">Receive Date</label>
      <input type="text" class="form-control" id="receive_date" name="receive_date" value =<?php echo date('Y-m-d'); ?> aria-describedby="text" placeholder="Receive Date">
      
    </div>

    <!-- <div class="form-group">
      <label for="po_id">PO No</label>
      <input type="text" class="form-control" id="po_no" name="po_id" aria-describedby="text" placeholder="PO No">
      
    </div> -->

    <div class="form-group">
      <label for="contact_person">PO Reference</label>
      <?php echo form_dropdown('po_id', $ref, '', 'class="form-control"');?> 
      <button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="window.open('<?php echo base_url(); ?>po/edit/<?php echo '4' ?> ')"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button>
    </div>
          
    <div class="form-group">
      <label for="contact_person">Supplier</label>
      <?php echo form_dropdown('supplier_id', $supp, '', 'class="form-control"');?> 
    
    </div>
    <!-- <div class="form-group">
      <label for="pr_id">PR No</label>
      <input type="text" class="form-control" id="pr_id" name="pr_id" aria-describedby="text" placeholder="PR No">
      
    </div> -->
    
    <div class="form-group">
      <label for="email">Status</label>
      <select id = "myList" class="form-control" name="status">
               <option value = "Approved">Received</option>
               <option value = "Approved">Cancelled</option>
               <option value = "Rejected">Rejected</option>
             
             </select>
      <!-- <input type="text" class="form-control" id="status" name="status"  aria-describedby="status" placeholder="Status" value = "<?php echo $release['status']; ?>"> -->
      
    </div>

    <div class="form-group">
      <label for="email">Receive By</label>
      <input type="text" class="form-control" id="receive_by" name="receive_by"  aria-describedby="receive_by" placeholder="Receive By">
      
    </div>

    <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control" id="remarks" name="remarks"  rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
