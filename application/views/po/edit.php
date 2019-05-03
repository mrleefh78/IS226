<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('po/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="po_id" name="po_id" aria-describedby="text" placeholder="ID" value = "<?php echo $po['po_id']; ?>">
    
  <div class="form-group">
      <label for="po_date">PO Date</label>
      <input type="text" class="form-control" id="po_date" name="po_date" aria-describedby="text" placeholder="PO Date" value = "<?php echo $po['po_date']; ?>">
      
    </div>

    <!-- <div class="form-group">
      <label for="pr_id">PR No</label>
      <input type="text" class="form-control" id="pr_no" name="pr_id" aria-describedby="text" placeholder="PR No" value = "<?php echo $po['pr_id']; ?>">
      
    </div> -->

    <div class="form-group">
      <label for="contact_person">PR Reference</label>
      <?php echo form_dropdown('pr_id', $ref, $po['pr_id'], 'class="form-control"');?> 
      <button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="window.open('<?php echo base_url(); ?>pr/edit/<?php echo '4' ?> ')"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button>
    </div>

    <div class="form-group">
      <label for="contact_person">Supplier</label>
      <?php echo form_dropdown('supplier_id', $supp, $po['supplier_id'], 'class="form-control"');?> 
    
    </div>
          
    <div class="form-group">
      <label for="email">PO By</label>
      <input type="text" class="form-control" id="req_by" name="po_by"  aria-describedby="po_by" placeholder="PO By" value = "<?php echo $po['po_by']; ?>">
      
    </div>

  

    <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control" id="req_notes" name="remarks"  rows="3"><?php echo $po['remarks']; ?></textarea>
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
