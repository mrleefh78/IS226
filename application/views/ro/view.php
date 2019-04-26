<h2><?php echo $ro['receive']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="supplier_name">ID</label>
      <input type="text" class="form-control" id="release_id" aria-describedby="text" placeholder="Receive ID" value = "<?php echo $ro['receive_id']; ?>">
      
  <div class="form-group">
      <label for="po_date">Receive Date</label>
      <input type="text" class="form-control" id="receive_date" name="receive_date" aria-describedby="text" placeholder="Receive Date" value = "<?php echo $ro['receive_date']; ?>">
      
    </div>

    <div class="form-group">
      <label for="po_id">PO No</label>
      <input type="text" class="form-control" id="po_no" name="po_id" aria-describedby="text" placeholder="PO No" value = "<?php echo $ro['po_id']; ?>">
      
    </div>
          
    <div class="form-group">
      <label for="email">Supplier</label>
      <input type="text" class="form-control" id="supplier_id" name="receive_by"  aria-describedby="supplier_id" placeholder="Supplier By" value = "<?php echo $ro['supplier_id']; ?>">
      
    </div>

    <div class="form-group">
      <label for="email">Receive By</label>
      <input type="text" class="form-control" id="receive_by" name="receive_by"  aria-describedby="receive_by" placeholder="Receive By" value = "<?php echo $ro['receive_by']; ?>">
      
    </div>

    <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control" id="remarks" name="remarks"  rows="3"><?php echo $ro['remarks']; ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>