<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php echo form_open('items/subclass_create'); ?>
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Item Sub-Class</label>
      <input type="text" class="form-control" id="item_name" name="item_name" aria-describedby="text" placeholder="Item Class">
      
    </div>

       

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
