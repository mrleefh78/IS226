<h2>Create Inventory Items</h2>

<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php echo form_open('items/create'); ?>
  <fieldset>
    <div class="form-group">
      <label for="item_name">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Name">
          </div>
    
    <div class="form-group">
      <label for="unit">Unit of Measurement (UOM)</label>
      <input type="text" class="form-control" id="uom" name="uom" aria-describedby="text" placeholder="Unit of Measurement">
      
    </div>
 <div class="form-group"> 
        <!--dropdown input--> 
        <label class="title">Item Class </label> 
        <?php echo form_dropdown('item_class', $itemclass, '', 'class="form-control"');?> 
            
    </div> 


     <div class="form-group">
      <label for="title">Item Sub Class</label>
        <?php echo form_dropdown('item_sub', $itemsub, '', 'class="form-control"');?> 
            
      
    </div>
    <div class="form-group">
      <label for="unit">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="text" placeholder="Quantity">
      
    </div>

    <div class="form-group">
      <label for="unit">Re-order Level</label>
      <input type="text" class="form-control" id="reorder" name="reorder" aria-describedby="text" placeholder="Re-order Level">
      
    </div>

    <div class="form-group">
      <label for="unit">Price</label>
      <input type="text" class="form-control" id="price" name="price" aria-describedby="text" placeholder="Price" size="15">
      
    </div>

     
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
