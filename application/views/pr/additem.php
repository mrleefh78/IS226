<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $itementries = array("name" => "createform");
echo form_open('pr/additem', $itementries); ?>
  <fieldset>
  <div class="form-group">
      <label for="pr_id">PR ID</label>
      <input type="text" class="form-control" id="pr_id" name="pr_id"  aria-describedby="pr_id" placeholder="PR ID" value = <?=$pr_id?>>
      
    </div>
  <div class="form-group">
      <label for="item_id">Item</label>
      <!-- <input type="text" class="form-control" id="item_id" name="item_id"  aria-describedby="item_id" placeholder="Item" > -->
      <?php echo form_dropdown('item_id', $items, '', 'class="form-control"');?> 
      
    </div>
    <div class="form-group">
      <label for="email">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="quantity"  aria-describedby="quantity" placeholder="Quantity">
      
    </div>
    <div class="form-group">
      <label for="uom">Unit</label>
      <input type="text" class="form-control" id="uom" name="uom"  aria-describedby="uom" placeholder="Unit" >
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
