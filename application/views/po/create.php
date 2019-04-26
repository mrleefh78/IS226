<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('po/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="po_date">PO Date</label>
      <input type="text" class="form-control" id="po_date" name="po_date" aria-describedby="text" value =<?php echo date('Y-m-d'); ?> placeholder="PO Date">
      
    </div>
    <div class="form-group">
      <label for="pr_id">PR No</label>
      <input type="text" class="form-control" id="pr_id" name="pr_id" aria-describedby="text" placeholder="PR No">
      
    </div>
    
 
    <div class="form-group">
      <label for="po_by">PO By</label>
      <input type="text" class="form-control" id="po_by" name="po_by" aria-describedby="text" placeholder="PO By">
      
    </div>
    <div class="form-group">
      <label for="remarks">Notes</label>
      <textarea class="form-control" id="remarks" name="remarks"  rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
