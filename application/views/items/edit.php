<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('items/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="item_id" name="item_id" aria-describedby="text" placeholder="Item Name" value = "<?php echo $item['item_id']; ?>">

  <div class="form-group">
      <label for="exampleInputEmail1">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Name" value = "<?php echo $item['item_name']; ?>">
      
    </div>
    
 
     <div class="form-group">
      <label for="exampleInputEmail1">Item Class</label>
      <input type="text" class="form-control" id="item_class" name="item_class" aria-describedby="text" placeholder="Item Class" value = "<?php echo $item['item_class_id']; ?>">
      
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Item Sub Class</label>
      <input type="text" class="form-control" id="item_sub" name="item_sub" aria-describedby="text" placeholder="Item Sub Class" value = "<?php echo $item['item_sub_class_id']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
