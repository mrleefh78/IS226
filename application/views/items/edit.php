<h2><?=$title?></h2>

<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('items/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="item_id" name="item_id" aria-describedby="text" placeholder="Item Name" value = "<?php echo $item['item_id']; ?>">

  <div class="form-group">
      <label for="item_name">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Name" value = "<?php echo $item['item_name']; ?>">
      
    </div>
    
      <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="text" placeholder="Item Quantity"value = "<?php echo $item['quantity']; ?>">
      
    </div>
    <div class="form-group">
      <label for="unit">Unit of Measurement (UOM)</label>
      <input type="text" class="form-control" id="uom" name="uom" aria-describedby="text" placeholder="Unit of Measurement"value = "<?php echo $item['uom']; ?>">
      
    </div>
 
   <div class="form-group">
      <label for="title">Item Class</label>
        <?php echo form_dropdown('item_class', $itemclass, 'item_class_id', 'class="form-control"') ;?> 
            
      
    </div>

     <div class="form-group">
      <label for="title">Item Sub Class</label>
        <?php echo form_dropdown('item_sub', $itemsub, 'item_sub_class_id', 'class="form-control"') ;?> 
            
      
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Item Class</label>
      <input type="text" class="form-control" id="item_class" name="item_class" aria-describedby="text" placeholder="Item Class" value = "<?php echo $item['item_class_id']; ?>">
      
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Item Sub Class</label>
      <input type="text" class="form-control" id="item_sub" name="item_sub" aria-describedby="text" placeholder="Item Sub Class" value = "<?php echo $item['item_sub_class_id']; ?>">
      </div>


    <div class="form-group">
      <label for="reorder">Re-order Level</label>
      <input type="text" class="form-control" id="reorder" name="reorder" aria-describedby="text" placeholder="Re-order Level"value = "<?php echo $item['reorder_level']; ?>">
      
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" aria-describedby="text" placeholder="Price" size="15"value = "<?php echo $item['price']; ?>">
         </div>
   
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
