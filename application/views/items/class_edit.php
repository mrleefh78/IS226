<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('items/update_class', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="item_id" name="item_id" aria-describedby="text" placeholder="Item Name" value = "<?php echo $class['item_id']; ?>">

  <div class="form-group">
      <label for="exampleInputEmail1">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Name" value = "<?php echo $class['item_name']; ?>">
      
    </div>
    
 
     
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
