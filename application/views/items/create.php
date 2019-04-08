<h2>Create Inventory Items</h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php echo form_open('items/create'); ?>
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Name">
      
    </div>

      <div class="form-group"> 
        <!--dropdown input--> 
        <label class="title">Item Class </label> 
        <?php echo form_dropdown('item_class', $job_positions, '', 'class="form-control"');?> 
            
    </div> 


     <div class="form-group">
      <label for="exampleInputEmail1">Item Sub Class</label>
      <input type="text" class="form-control" id="item_sub" name="item_sub" aria-describedby="text" placeholder="Item Sub Class">
      
    </div>

    

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
