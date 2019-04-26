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

    <div class="form-group">
      <label for="po_id">PO No</label>
      <input type="text" class="form-control" id="po_no" name="po_id" aria-describedby="text" placeholder="PO No">
      
    </div>
          
    <div class="form-group">
      <label for="email">Supplier</label>
      <input type="text" class="form-control" id="supplier_id" name="supplier_id"  aria-describedby="supplier_id" placeholder="Supplier">
      
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
