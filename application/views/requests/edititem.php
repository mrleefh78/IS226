<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('requests/updateitem', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="id" name="id" aria-describedby="text" placeholder="ID" value = "<?php echo $request['id']; ?>">
    
  <div class="form-group">
      <label for="req_id">Req ID</label>
      <input type="text" class="form-control" id="req_id" name="req_id"  aria-describedby="req_id" placeholder="Request ID" value = <?=$request['req_id']?>>
      
    </div>
  <div class="form-group">
      <label for="item_id">Item</label>
      <!-- <input type="text" class="form-control" id="item_id" name="item_id"  aria-describedby="item_id" placeholder="Item" value = "<?php echo $request['item_id']; ?>"> -->
      <?php echo form_dropdown('item_id', $items, $request['item_id'], 'class="form-control"');?> 
    </div>
    <div class="form-group">
      <label for="email">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="quantity"  aria-describedby="quantity" placeholder="Quantity" value = "<?php echo $request['quantity']; ?>">
      
    </div>
    <div class="form-group">
      <label for="uom">Unit</label>
      <input type="text" class="form-control" id="uom" name="uom"  aria-describedby="uom" placeholder="Unit" value = "<?php echo $request['uom']; ?>">
      
    </div>
    <button type="submit" class="btn btn-primary">Save</button>

  
    <div></div>    
  </fieldset>
</form>