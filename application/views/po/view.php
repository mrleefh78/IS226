<h2><?php echo $request['po']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="po_id">ID</label>
      <input type="text" class="form-control" id="po_id" aria-describedby="text" placeholder="PO ID" value = "<?php echo $po['po_id']; ?>">
      
    </div>
    <div class="form-group">
      <label for="po_date">PO Date</label>
      <input type="text" class="form-control" id="po_date" name="po_date" aria-describedby="text" placeholder="PO Date" value = "<?php echo $po['po_date']; ?>">
      
    </div>

    <div class="form-group">
      <label for="pr_id">PR No</label>
      <input type="text" class="form-control" id="pr_no" name="pr_id" aria-describedby="text" placeholder="PR No" value = "<?php echo $po['pr_id']; ?>">
      
    </div>
          
    <div class="form-group">
      <label for="email">PO By</label>
      <input type="text" class="form-control" id="req_by" name="po_by"  aria-describedby="po_by" placeholder="PO By" value = "<?php echo $po['po_by']; ?>">
      
    </div>

  

    <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control" id="req_notes" name="remarks"  rows="3"><?php echo $po['remarks']; ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>